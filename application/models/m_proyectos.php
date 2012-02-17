<?php
class M_proyectos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="resumen";
        /*
         insert into organoente (opcion,tipo,id_table) SELECT opcion,"o",id FROM organo;
         insert into organoente (opcion,tipo,id_table) SELECT opcion,"e",id FROM ente;
         insert into organoente_ejecu (opcion,tipo,id_table) SELECT opcion,"o",id FROM organo;
         insert into organoente_ejecu (opcion,tipo,id_table) SELECT opcion,"e",id FROM ente;
         
     DELIMITER //
     CREATE TRIGGER  nuevoOrgano after insert on organo          
        for each row
            BEGIN
                insert into organoente (opcion,tipo,id_table) values(new.opcion,"o",new.id);
                insert into organoente_ejecu (opcion,tipo,id_table) values(new.opcion,"o",new.id);
            END// 
    DELIMITER ;

DELIMITER |
CREATE TRIGGER modifOrgano after update ON organo
  FOR EACH ROW BEGIN
     update organoente set organoente.opcion=new.opcion where organoente.id_table=new.id;    
     update organoente_ejecu set organoente_ejecu.opcion=new.opcion where organoente_ejecu.id_table=new.id;    
  END|
DELIMITER ;


DELIMITER |
CREATE TRIGGER deleteOrgano after DELETE ON organo
  FOR EACH ROW BEGIN
     DELETE from  organoente where organoente.id_table=old.id;    
     DELETE from  organoente_ejecu where organoente_ejecu.id_table=old.id;    
  END|
DELIMITER ;

*/
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
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();/*
       return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion,organo.opcion as organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos,organo WHERE
                resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
	organo.id=SUBSTRING(resumen.organ FROM 3) and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and fondoci!=0  and 
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();*/

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
   
   function buscando_py_Modif($id)
   {
       $this->db->select("id as id_py,nopro as nombre,descr as descripcion,lineaesta as lineaEstrategica,
                          odm as objetivosDelMileniun,norespro as nombre_responsable , cocomu as sector_comunal,organ as organo,ejecu as ente,
                          fase as fases,etapa1 as preinversion,etapa2 as py_new,etapa3 as ampl_modif,etapa4 as cumlinacion,ti_are as areaInversion,ti_cate as categoria,
                          unidad as unidad_abscripcion_resp,cargo as cargo_responsable,correo as email_resp,telf as telefonos_responsable,fax as fax_resp,
                          munici as municipio,parroq as parroquia,norte as latitude,este as longitude,directriz,objetivo,estrategia,politica,tiempo as tiempoEstimado,monto,otra as otraFuente,impsoc,pobl as poblacionBeneficiada,
                          avafisico as porcentajeAvanceF,avafinanc as porcentajeAvanceFinan,formulacion,metas,articu as articulacionConOtrosEntes,empdirec as empleosDirectos,empindi as empleosIndirectos,
                          compone as competencias,ti_pro as tipoProyecto
                        ");
       return $this->db->get_where("resumen",array("id"=>$id))->result_array();
   }
   
     function resultTable_Where($table,$where,$select="*")
    {
        $this->db->select($select);
        return $this->db->get_where($table,$where)->result_array();
       
    }//consultas_para los combos
   
    
function modif($id)
    {
        
        $datos=array(
                     "nopro"=>$this->input->post("nombre"),
                     "descr"=>$this->input->post("descripcion"),
                     "lineaesta"=>$this->input->post("lineaEstrategica"),
                     "odm"=>$this->input->post("objetivosDelMileniun"),
                     "ti_are"=>$this->input->post("areaInversion"),
                     "ti_cate"=>$this->input->post("categoria"),
                     "ti_pro"=>$this->input->post("tipoProyecto"),
                     "munici"=>$this->input->post("municipio"),
                     "parroq"=>$this->input->post("parroquia"),
                     "directriz"=>$this->input->post("directriz"),
                     "objetivo"=>$this->input->post("objetivo"),
                     "estrategia"=>$this->input->post("estrategia"),
                     "politica"=>$this->input->post("politica"),
                     "etapa1"=>$this->input->post("preinversion"),
                     "etapa2"=>$this->input->post("py_new"),
                     "etapa3"=>$this->input->post("ampl_modif"),
                     "etapa4"=>$this->input->post("cumlinacion"),
                     "fase"=>$this->input->post("fases"),
                     "norespro"=>$this->input->post("nombre_responsable"),
                     "unidad"=>$this->input->post("unidad_abscripcion_resp"),
                     "cargo"=>$this->input->post("cargo_responsable"),
                     "correo"=>$this->input->post("email_resp"),
                     "telf"=>$this->input->post("telefonos_responsable"),
                     "fax"=>$this->input->post("fax_resp"),
                     "cocomu"=>$this->input->post("sector_comunal"),
                     "norte"=>$this->input->post("latitude"),
                     "este"=>$this->input->post("longitude"),
                     "tiempo"=>$this->input->post("tiempoEstimado"),
                     "monto"=>$this->input->post("monto"),
                     "otra"=>$this->input->post("otraFuente"),
                     "impsoc"=>$this->input->post("impsoc"),
                     "pobl"=>$this->input->post("poblacionBeneficiada"),
                     "avafisico"=>$this->input->post("porcentajeAvanceF"),
                     "avafinanc"=>$this->input->post("porcentajeAvanceFinan"),
                     "empdirec"=>$this->input->post("empleosDirectos"),
                     "empindi"=>$this->input->post("empleosIndirectos"),
                     "formulacion"=>$this->input->post("formulacion"),
                     "metas"=>$this->input->post("metas"),
                     "articu"=>$this->input->post("articulacionConOtrosEntes"),
                     "compone"=>$this->input->post("competencias"),
                     "organ"=>$this->input->post("organo"),
                     "ejecu"=>$this->input->post("ente"),
                     );

        $this->db->where('id', $id);
        $this->db->update($this->table, $datos); 
        /// * No modificar esta linea
        $this->bitacora->crear();
    }//fin modif
    
    
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