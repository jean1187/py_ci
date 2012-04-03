<?php
class M_proyectos extends CI_Model {

    private $table;    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->table="resumen";
        /*
         * 
         *  eliminar los triggers 
          DROP TRIGGER nuevoEnte;
         DROP TRIGGER modifEnte;
         DROP TRIGGER deleteEnte;
         DROP TRIGGER nuevoOrgano;
         DROP TRIGGER modifOrgano;
         DROP TRIGGER deleteOrgano;
         
         */
        /*
         * 
         * 
        
        
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
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion as lineaestada,organoente.opcion as organ,organoente_ejecu.opcion as ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos,organoente,organoente_ejecu WHERE
                resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and organoente_ejecu.id=resumen.ejecu  and
        resumen.estrategia=estrados.id and organoente.id=resumen.organ
        and resumen.politica=polidos.id  and aprobado=1 and factible=1 and fondoci!=0  and 
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
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion as lineaestada,organoente.opcion as organ,organoente_ejecu.opcion as ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos,organoente,organoente_ejecu WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and organoente_ejecu.id=resumen.ejecu  and organoente.id=resumen.organ and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and situadoc!=0 and  
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   
   function ListaPlandeInversion_OtraFuente($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion as lineaestada,organoente.opcion as organ,organoente_ejecu.opcion as ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos,organoente,organoente_ejecu WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and organoente_ejecu.id=resumen.ejecu  and organoente.id=resumen.organ and
        resumen.estrategia=estrados.id and resumen.politica=polidos.id  and aprobado=1 and factible=1 and otrafuente!=0 and  
        cod =".$cod." ORDER BY `resumen`.`id` ASC")->result_array();
   }
   
   function ListaPlandeInversion_SinPropuesta($cod)
   {
            return $this->db->query("SELECT  resumen.id,nopro,lineaestada.opcion as lineaestada,organoente.opcion as organ,organoente_ejecu.opcion as ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion as tipo_py,catego.opcion as categoria,area.opcion as area,norespro,unidad,cargo,correo,telf,fax,municipio.opcion as municipio, parroquia.opcion as parroquia,cocomu,norte,este,lineas.opcion as lineas,objedos.opcion as objedos,estrados.opcion as estrados,polidos.opcion as polidos,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa,nota FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos,organoente,organoente_ejecu WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
        resumen.directriz=lineas.id and resumen.objetivo=objedos.id and organoente_ejecu.id=resumen.ejecu  and organoente.id=resumen.organ and
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
    
    
   function cambio_organo_ente()
    {
        
               $this->buscar();
               $this->valores();
    }
    
    function buscar()
    {
        foreach ($this->db->get("resumen")->result_array() as $key=>$valor)
        {
            if($valor["organ"]<1 or $valor["organ"]>60 or $valor["ejecu"]<1 or $valor["ejecu"]>60)
            echo "<h6> Numero = ".$key."  Id = ".$valor["id"]."   el organo es = ".$valor["organ"]."    el ejecutor es = ".$valor["ejecu"]." </h6><br/>";
            //comparando con el campo organo de resumen
             /*  $this->db->like('opcion',$valor["organ"]); 
               $this->db->from('organoente');
               $organ_ente=$this->db->get()->row_array();
               if(count($organ_ente))
               {
                   
                   $this->db->where('id', $valor["id"]);
                   $this->db->update('resumen', array("organ"=>$organ_ente["id"])); 
                   echo "Cambie Organ =".$valor["organ"]." por el idOrganoEnte =".$organ_ente["id"]."  id del py ".$valor["id"]."<br/>";
               }
                   
               
               $this->db->like('opcion',$valor["ejecu"]); 
               $this->db->from('organoente_ejecu');
               $organ_ente=$this->db->get()->row_array();
               
               if(count($organ_ente))
               {
                   //$organ_ente=$this->db->row_array();
                   $this->db->where('id', $valor["id"]);
                   $this->db->update('resumen', array("ejecu"=>$organ_ente["id"])); 
                   echo "Cambie Ejecu =".$valor["ejecu"]." por el idEjecu =".$organ_ente["id"]." id del py ".$valor["id"]."<br/>";
               }
               */
               }//fin foreach
    }
    
    function valores()
    {
        $valores=array(
                            array("comparar"=>"EDU%CI%N","id"=>5),//SECTORIAL DEL PODER POPULAR PARA LA EDUCACI
                            array("comparar"=>"ARROLLO%URBAN", "id"=>13),
                            array("comparar"=>"LLO SOCIAL","id"=>8),
                            array("comparar"=>"ARAGUA%(FRNSA)","id"=>34),
                            array("comparar"=>"REGIONAL%NI%N%ARAGUA","id"=>34),
                            array("comparar"=>"trimonio%Hist","id"=>14),
                            array("comparar"=>"ARATUR","id"=>35),
                            array("comparar"=>"Vivienda","id"=>36),
                            array("comparar"=>"ORDENAMIENTO%TERRITORIA","id"=>7),
                            array("comparar"=>"de%Parques%de%Aragua","id"=>47),//**INSERT INTO `ente` (`id` ,`opcion` ,`relacion`)VALUES (NULL , 'Fundacón de Parques de Aragua ', '7');
                            array("comparar"=>"del%Poder%Popular%para%la%Infraestructura","id"=>13),
                            array("comparar"=>"ALIMENTOS%ARAGUA%SOCIALISTA","id"=>48),//**INSERT INTO `ente` (`id` ,`opcion` ,`relacion`)VALUES (NULL , 'ALIMENTOS ARAGUA SOCIALISTA, S.A.', '10')
                            array("comparar"=>"LLO%AGRARIO","id"=>10),
                            array("comparar"=>"INSTITUTO%DE%LA%MUJER%DE%ARAGUA","id"=>49),//**INSERT INTO `proyectos_server`.`ente` (`id` ,`opcion` ,`relacion`)VALUES (NULL , 'INSTITUTO DE LA MUJER DE ARAGUA (IMA)', '8');
                            array("comparar"=>"Tecnologia%y%Sistema","id"=>18),
                            array("comparar"=>"GOBIERNO%BOLIVARIANO%DE%ARAGUA","id"=>1),//**UPDATE `proyectos_server`.`organo` SET `opcion` = 'GOBIERNO BOLIVARIANO DE ARAGUA' WHERE `organo`.`id` =1;
                            array("comparar"=>"SARROLLO%ECON%MICO","id"=>11),
                            array("comparar"=>"Fortalecimiento%Poder%Popular","id"=>2),
                            array("comparar"=>"DEL%PODER%POPULAR%PARA%LA%SALUD","id"=>9),
                            array("comparar"=>"n%de%Salud%del%Estado%Aragua","id"=>19),
                             array("comparar"=>"CORPOSALUD","id"=>19),
                             array("comparar"=>"SECTORIAL%CULTURA","id"=>4),
                             array("comparar"=>"INSTITUTO%CULTURA","id"=>50),//**INSERT INTO `proyectos_server`.`ente` (`id`, `opcion`, `relacion`) VALUES (NULL, 'INSTITUTO DE CULTURA DE ARAGUA', '4');
                            array("comparar"=>"ateneo","id"=>51),//**INSERT INTO `proyectos_server`.`ente` (`id`, `opcion`, `relacion`) VALUES (NULL, 'ATENEO DE MARACAY ', '4');
                            array("comparar"=>"Adolescentes","id"=>33),
                            array("comparar"=>"(Inpo","id"=>45),
                            array("comparar"=>"TRASARAGUA","id"=>52),//**INSERT INTO `proyectos_server`.`ente` (`id`, `opcion`, `relacion`) VALUES (NULL, 'TRASARAGUA, S.A', '1');
                          /* array("comparar"=>"REGIONAL%DEPORTE%ARAGUA","id"=>21),
                           
                           array("comparar"=>"INSTITUTO%CULTURA","id"=>50),
                           array("comparar"=>"SECTORIAL%CULTURA","id"=>4),
                           array("comparar"=>"CORASA","id"=>51),
                            
                            
                            
                            array("comparar"=>"Protecci%Civil","id"=>38),
                            array("comparar"=>"PREFECTURAS","id"=>43),
                            array("comparar"=>"S.I.A.E%171%","id"=>54),
                             array("comparar"=>"BIBLIOTECAS","id"=>30),
                            array("comparar"=>"MARCHA%BICENTENARIA","id"=>25),
                            array("comparar"=>"ARAGUA%MARCHA","id"=>25),
                            array("comparar"=>"EMERGENCIAS%171","id"=>54),
                            array("comparar"=>"EMERGENCIAS%171","id"=>54),
                            array("comparar"=>"SEGURIDAD%CIUDADANA","id"=>6),      */             
               );
               
               foreach ($valores as $key=>$valore)
               {    
                        /*$this->db->like('organ',$valor["comparar"]);
                        $this->db->from('resumen');*/
                        //$py_afectados=$this->db->get()->result_array();
                        $py_afectados=$this->db->query("select *from resumen where organ like '%".$valore["comparar"]."%'")->result_array();
                       if(count($py_afectados))
                       {
                         foreach($py_afectados as $valor_py)
                         {
                             $this->db->where('id', $valor_py["id"]);
                             $this->db->update('resumen', array("organ"=>$valore["id"])); 
                             echo "Cambie Organ =".$valore["comparar"]." por el idOrganoEnte =".$valore["id"]."  del Proyecto =".$valor_py["id"]."<br/>";
                         }
                       }
                   /*
                       echo $this->db->last_query();
                       exit;*/
                        /*$this->db->like('ejecu',$valor["comparar"]);
                        $this->db->from('resumen');*/
                        //$py_afectados=$this->db->get()->result_array();
                        $py_afectados=$this->db->query("select *from resumen where ejecu like '%".$valore["comparar"]."%'")->result_array();
                       if(count($py_afectados))
                       {
                         foreach($py_afectados as $valor_py)
                         {
                             $this->db->where('id', $valor_py["id"]);
                             $this->db->update('resumen', array("ejecu"=>$valore["id"])); 
                             echo "Cambie Ejecu =".$valore["comparar"]." por el idOrganoEnte =".$valore["id"]."  del Proyecto =".$valor_py["id"]."<br/>";
                         }
                       }
                       
                        
                        
               }//fin for
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