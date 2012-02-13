<?php
class M_proyectos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="resumen";
    }
    
    function TotalProyectos($id)
    {
        return $this->db->query('SELECT COUNT(cod) as total_py,sum(monto) as monto_total FROM resumen where  cod='.$id)->row_array();
    }
    
    function PlandeInversion_FCI($cod)
    {
        $retorno=array();
        foreach($this->db->get_where("area",array("id <>"=>4))->result_array() as $valor)
        {
            $proyectos=$this->db->query("SELECT COUNT(cod) as total_py,sum(monto) as monto_total FROM resumen where ti_are=".$valor["id"]." and aprobado=1 and factible=1 and fondoci!=0 and cod=".$cod)->row_array();
            $retorno[$valor["opcion"]]=array("total_py"=>$proyectos["total_py"],"monto_total"=>$proyectos["monto_total"]);
        }
        return $retorno;
    }
    
   function ListaPlandeInversion_FCI($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE
                resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and fondoci!=0  and 
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   
   function ListaPlandeInversion_Situado($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and situadoc!=0 and  
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   
   function ListaPlandeInversion_OtraFuente($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and otrafuente!=0 and  
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   
   function ListaPlandeInversion_SinPropuesta($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=0 and
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   

   function proyectos_mapa($cod)
   {
       return $this->db->query("SELECT resumen.id,organ,norte,este,nopro,descr,monto,parroquia.opcion as pquia,municipio.opcion as muni FROM resumen,municipio,parroquia where resumen.munici=municipio.id and resumen.parroq=parroquia.id and cod=".$cod)->result_array();
   }
   
   function Monto_situado($cod)
   {
       return $this->db->query("SELECT COUNT(cod) as total,sum(monto) as monto FROM resumen where aprobado=1 and factible=1 and situadoc!=0  and cod='$cod' ")->row_array();
   }
   
   function OtraFuente($cod)
   {
       return $this->db->query("SELECT COUNT(cod) as total ,sum(monto) as monto FROM resumen where aprobado=1 and factible=1 and otrafuente!=0  and cod='$cod' ")->row_array();
       
   }
   
   function SinPropuesta($cod)
   {
       return $this->db->query("SELECT COUNT(cod) as total ,sum(monto) as monto FROM resumen where aprobado=0  and cod='$cod' ")->row_array();
       
   }
   
   function cambio_estrados()
   {
       
       
       foreach ($this->db->get("estrados")->result_array() as $valor)
       {
           $DB = $this->load->database("prueba",TRUE);
           $picado=substr($valor["opcion"],0,  (int)(strlen($valor["opcion"])-(strlen($valor["opcion"])/3)+4));
           echo $valor["id"]." ) <b>".$picado."</b>                          <i>".$valor["opcion"]."</i><br>";
             $DB->from("estrados");
             $DB->like('opcion', utf8_encode($picado), 'after'); 
             $estrategias_v=$DB->get()->result_array();
             $array_id_estrados=array();
             foreach($estrategias_v as $v)
             {
                 
                 echo "<i>".$v["id"]." -------". $v["opcion"]."</i><br>";
                 $array_id_estrados[]=$v["id"];
             }
                 if(!empty ($array_id_estrados))
                 {
                         $this->load->database("default",TRUE);
                         
                         $this->db->where_in('estrategia', $array_id_estrados);
                         $this->db->update('resumen', array("estrategia"=>$valor["id"]));

                         $this->db->query("update aprobado11 set estrategia=40 where estrategia=219");
                         $this->db->query("update planinversion set estrategia=40 where estrategia=219");
                         $this->db->query("update resumen set estrategia=40 where estrategia=219");
                         
                         
                         $this->db->query("update aprobado11 set estrategia=23 where estrategia in (55,67,79,91,103,115,127,139)");
                         $this->db->query("update planinversion set estrategia=23 where estrategia in (55,67,79,91,103,115,127,139)");
                         $this->db->query("update resumen set estrategia=23 where estrategia in (55,67,79,91,103,115,127,139)");
                         
                         
                         $this->db->query("update aprobado11 set estrategia=4 where estrategia in (12,20,28,36)");
                         $this->db->query("update planinversion set estrategia=4 where estrategia in  (12,20,28,36)");
                         $this->db->query("update resumen set estrategia=4 where estrategia in (12,20,28,36)");
                         
                         
                         $this->db->where_in('estrategia', $array_id_estrados);
                         $this->db->update('aprobado11', array("estrategia"=>$valor["id"]));
                         
                         
                         
                         $this->db->where_in('estrategia', $array_id_estrados);
                         $this->db->update('planinversion', array("estrategia"=>$valor["id"]));
                         
                         
                        // $this->db->from("resumen");
                         
                        // $this->db->get();
                         
                 }
             
       }
   }
}//fin class
?>