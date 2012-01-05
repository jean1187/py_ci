<?php if(!defined('BASEPATH'))         exit('No direct script access allowed');

class Jqgrid  {

    function  __construct() {
        $this->CI=& get_instance();
        $this->db=$this->CI->db;
    }
    

    function armado_inicial($valores,$tabla,$condicion_and="",$sql="",$condicion_or="",$no_repite=false) {
        if ($_POST['_search']=='true') {
            $filtros=json_decode(str_replace("\\","",$_POST['filters']));
        } else {
            $filtros="";
        }
        
        $filter=$this->jqgrid_filtros($filtros);
        $count=$this->count_registros($tabla,$condicion_and,$sql,$condicion_or);
        $result_armado=$this->armado_consulta($_POST['page'],$_POST['rows'],$_POST['sidx'],$_POST['sord'],$count);
        $result_data=$this->mostrar_registros($result_armado['sidx'],$result_armado['sord'],$result_armado['start'],$result_armado['limit'],$filter,$tabla,$valores,$condicion_and,$sql,$condicion_or);
        
      return $this->agrupa_para_enviar($valores,$result_data,$result_armado['page'],$result_armado['total_pages'],$count,$no_repite);
    }//Fin jqgrid_armado_inicial

    function jqgrid_filtros($filtros){        
        $filter="";

        if ($filtros<>"") {
            for ($i=0;$i<count($filtros->rules);$i++) {
                if ($i>0)
                    $filter.=" ".$filtros->groupOp." ";
                switch ($filtros->rules[$i]->op) {
                    case "bw":
                        $filter.=$filtros->rules[$i]->field.
                                " like '".$filtros->rules[$i]->data."%'";
                        break;
                    case "eq":
                        $filter.= $filtros->rules[$i]->field.
                                " = '".$filtros->rules[$i]->data."'";
                        break;
                    case "ne":
                        $filter.= $filtros->rules[$i]->field.
                                " <> '".$filtros->rules[$i]->data."'";
                        break;
                    case "lt":
                        $filter.= $filtros->rules[$i]->field.
                                " < '".$filtros->rules[$i]->data."'";
                        break;
                    case "le":
                        $filter.= $filtros->rules[$i]->field.
                                " <= '".$filtros->rules[$i]->data."'";
                        break;
                    case "gt":
                        $filter.= $filtros->rules[$i]->field.
                                " > '".$filtros->rules[$i]->data."'";
                        break;
                    case "ge":
                        $filter.= $filtros->rules[$i]->field.
                                " >= '".$filtros->rules[$i]->data."'";
                        break;
                    case "ew":
                        $filter.= $filtros->rules[$i]->field.
                                " like '%".$filtros->rules[$i]->data."'";
                        break;
                    case "cn":
                        $filter.= $filtros->rules[$i]->field.
                                " like '%".$filtros->rules[$i]->data."%'";
                        break;
                    default:
                        break;
                }
            }
        } elseif(!isset($filtros)) {
            $filter="";
        }
        
        return $filter;
    }//Fin jqgrid_filtros

    function armado_consulta($page, $limit, $sidx, $sord, $count){
        if(!$sidx) $sidx =1;

        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page=$total_pages;

        $start = $limit*$page - $limit;
        $start=abs($start);
        $result_armado=array('sidx'=>$sidx,'sord'=>$sord,'start'=>$start,'limit'=>$limit,'page'=>$page,'total_pages'=>$total_pages);

        return $result_armado;
    }//Fin armado_consulta

    function agrupa_para_enviar($valores,$result_data,$page,$total_pages,$count,$no_repite){

        $responce->page=$page;
        $responce->total=$total_pages;
        $responce->records=$count;
        $verificar_no_repite=array();
        $j=0;
        while (list($key,$value)=each($result_data)) {
            if($no_repite and in_array($value['id'], $verificar_no_repite))
                    continue;
            $verificar_no_repite[]=$value['id'];
            
            $responce->rows[$j]['id']=$value['id'];

            $campos=array();
            for($i=0;$i<count($valores);$i++){
                //Cuando el AS en el select es en mayuscula
                $posicionAS=strpos($valores[$i], " AS ");
               // Cuando el AS en el select es en miniscula
                $posicionas=strpos($valores[$i], " as ");

                if ($posicionAS){
                    //$valores[$i]= substr($valores[$i], $posicionAS+4, strlen($valores[$i]));
                } else if ($posicionas){
                    $valores[$i]= substr($valores[$i], $posicionas+4, strlen($valores[$i]));
                }
                $campos[$i]=$value[$valores[$i]];                
            }            

            $responce->rows[$j]['cell']=$campos;
            $j++;
        }//fi while
        if ($responce==NULL) {
            return "";
        } else {
            return json_encode($responce);
        }
        
    }//Fin agrupa_para_enviar


function grid_index($div,$path) {
    $grid=<<<EOF
        
        <script language="javascript" type="text/javascript" src="{$path}"></script>        
        <div id='formulario'></div>
        <div class="espaciado_vertical_botones alineacion_derecha ui-widget-content">
            <input type="button" name="formagregar_{$div}" id="formagregar_{$div}" value="Agregar" class="ui-state-default" />
            <input type="button" name="formmodificar_{$div}" id="formmodificar_{$div}" value="Modificar" class="ui-state-default" />
            <input type="button" name="eliminar_{$div}" id="eliminar_{$div}" value="Eliminar" class="ui-state-default" />
        </div>
EOF;
        return $grid;
    }//Fin grid_index

    function grid_modal($sql=""){
        if($sql==""){
            $elementos=explode("#",$_POST["elementos"]);
            unset($elementos[0]);
            $tabla=substr($_POST["tabla"],0,  strlen($_POST["tabla"])-5);
            $filter=explode("#",$_POST["filter"]);
            $filter=array($filter[0]=>$filter[1]);
            return json_encode($this->armado_grid_modal($elementos,$tabla,$filter));

            }
            else {
                return json_encode($this->armado_grid_modal_sql($sql));
            }
    }

    function sub_grid($select='',$tabla='',$where='',$presonalizacion_del_result=''){
        $result=($presonalizacion_del_result=='')?$this->sub_grid_aramado($select,$tabla,$where):$presonalizacion_del_result;
        if (!empty($result)){
         foreach ($result as $key=>$valor){
                  $responce->rows[$key]['id']=$key;
                  $responce->rows[$key]['cell']=array_values($valor);
             }
        }//fin si el arreglo de la consulta no esta vacio
      else{
                  $responce->rows[1]['id']=1;
                  $responce->rows[1]['cell']="";
        }
         echo json_encode($responce);
    }//fin sub_grid



//                Funciones de modelo     ****************************************************         

    function count_registros($tabla,$condicion_and,$sql,$condicion_or) {
        if($sql=="")
              if($condicion_and=="")
                  return $this->db->get($tabla)->num_rows();
              else{
                    
                    $this->db->from($tabla);
                    $this->db->where($condicion_and);
                    if($condicion_or<>"")
                        $this->db->or_where($condicion_or);
                  return $this->db->get()->num_rows();
                  }
        else 
            return $this->db->query($sql)->num_rows();
    }

    function mostrar_registros($sidx,$sord,$start,$limit,$filter,$tabla,$valores,$condicion_and,$sql,$condicion_or) {
        if($sql==""){
              $this->db->select($valores,true);
              $this->db->order_by($sidx, $sord);
              $this->db->limit($limit,$start);
              if ($filter<>"") { 
                  return $this->db->get_where($tabla,$filter)->result_array();
              } else {
                  if ($condicion_and<>"")
                      {
                      $this->db->from($tabla);
                        $this->db->where($condicion_and);
                        if($condicion_or<>"")
                            $this->db->or_where($condicion_or);
                      return $this->db->get()->result_array();
                      }
                  else
                      return $this->db->get($tabla)->result_array();
              }
        }//fin $sql es vacio
        else{ 
                //$this->db->limit($start,$limit);
             // return $this->db->query($sql." LIMIT ".$limit." OFFSET ".$start)->result_array();
                 return $this->db->query($sql)->result_array();
            }
    }
    function buscar_para_editar($valores="",$id,$tabla,$sql=""){
        if($sql==""){
            if($valores!='')
                  $this->db->select($valores,true);
              return $this->db->get_where($tabla,array('id'=>$id))->result_array();
            }
        else 
            return $this->db->query($sql)->result_array();
    }

    //Armado del grid modal 
    function armado_grid_modal($elementos,$tabla,$filter){
        $this->db->select($elementos);
        return $this->db->get_where($tabla,$filter)->result_array();
    }
    function armado_grid_modal_sql($sql){
        return $this->db->query($sql)->result_array();
    }
    //fin Armado del grid modal 

    function sub_grid_aramado($select,$tabla,$where){
        $this->db->select($select);
        return $this->db->get_where($tabla,$where)->result_array();
    }//fin sub_grid_aramado








/*  fin Libreria   */
}
?>
