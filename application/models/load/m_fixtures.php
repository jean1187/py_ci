<?php
class M_fixtures extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    
    function cargar_datos_basicos_logueo()
    {
        $result="";
        $this->db->truncate('bitacora'); 
         $result.=$this->db->last_query()."\n";
        
        $this->db->truncate('historialSessions'); 
         $result.=$this->db->last_query()."\n"; 
         
        $this->db->truncate('proyecto'); 
         $result.=$this->db->last_query()."\n";  
        
         $this->db->truncate('responsable'); 
         $result.=$this->db->last_query()."\n";
         
        $this->db->truncate('users'); 
         $result.=$this->db->last_query()."\n";  
         
        $this->db->truncate('status'); 
         $result.=$this->db->last_query()."\n"; 
         
        $this->db->truncate('categoriaStatus'); 
         $result.=$this->db->last_query()."\n";
        
         $this->db->truncate('grupo'); 
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('menu'); 
         $result.=$this->db->last_query()."\n";

         $this->db->truncate('entidad'); 
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('organo'); 
         $result.=$this->db->last_query()."\n";
         
         
         $this->db->truncate('cargos'); 
         $result.=$this->db->last_query()."\n";
         
         
         $this->db->truncate('politica'); 
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('estrategia'); 
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('objetivo'); 
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('directriz'); 
         $result.=$this->db->last_query()."\n";
         
         
         
        $this->db->insert('categoriaStatus', array("nombre"=>"user")); 
         $result.=$this->db->last_query()."\n";
         
         
         
         $status=array(
                    array("nombre"=>"activo","categoriaStatus_id"=>1),
                    array("nombre"=>"inactivo","categoriaStatus_id"=>1),
            );
         
         $this->db->insert_batch('status', $status);
          $result.=$this->db->last_query()."\n";
          
        $grupos=array(
                    array("nombre"=>"super_admin"),
                    array("nombre"=>"proyecto")
            );
         
         $this->db->insert_batch('grupo', $grupos);
          $result.=$this->db->last_query()."\n";    

        $menues=array(
                    array("nombre"=>"Mantenimiento","url"=>"#","parent"=>NULL,"grupo"=>",1,"),
                    array("nombre"=>"Menu","url"=>"menu","parent"=>1,"grupo"=>",1,"),
                    array("nombre"=>"Tablas Sistema","url"=>"#","parent"=>1,"grupo"=>",1,"),
                    array("nombre"=>"Organos","url"=>"organos","parent"=>3,"grupo"=>",1,"),
                    array("nombre"=>"Cargos","url"=>"cargos","parent"=>3,"grupo"=>",1,"),
                    array("nombre"=>"Representantes","url"=>"representantes","parent"=>3,"grupo"=>",1,"),
            );
         
         $this->db->insert_batch('menu', $menues);
          $result.=$this->db->last_query()."\n"; 
          
          $this->db->insert('organo', array("nombre"=>"Gobernacion")); 
         $result.=$this->db->last_query()."\n";
         
          $this->db->insert('cargos', array("nombre"=>"Programador Web")); 
         $result.=$this->db->last_query()."\n";
         
          $this->db->insert('users', array("userLogin"=>"admin","passwordLogin"=>"VqN3dmdcRki+6mClS6aKJTs+Pus4t9nANXtKAuLJzDyAmyuNshQ5hHhOOGgC+MnqFZog+5XkE5k5IRs/4HyfnA==","nombre"=>"Jean C","apellido"=>"Mendoza","correo"=>"jeanmendozar@gmail.com","organo_id"=>1,"grupo_id"=>1,"status_id"=>1));
           $result.=$this->db->last_query()."\n";
          
           
           $directriz=array(
                    array("nombre"=>"Nueva Ética Socialista"),
                    array("nombre"=>"Suprema Felicidad Social"),
                    array("nombre"=>"Democracia Protagónica y Revolucionaria"),
                    array("nombre"=>"Modelo Productivo Socialista"),
                    array("nombre"=>"Nueva Geopolítica Nacional"),
                    array("nombre"=>"Venezuela : Potencia Energética Mundial"),
                    array("nombre"=>"Nueva Geopolítica Internacional"),
            );
           
          $this->db->insert_batch('directriz', $directriz);
          $result.=$this->db->last_query()."\n"; 
         
          $obj=array(
                  array("nombre"=>"Refundar ética y moralmente la Nación","directriz_id"=>1),
                  array("nombre"=>"Reducir la miseria a cero y acelerar la disminución de la pobreza","directriz_id"=>2),
                  array("nombre"=>"Transformar las relaciones sociales de producción construyendo unas de tipo socialistas basadas en la propiedad social","directriz_id"=>2),
                  array("nombre"=>"Fortalecer las capacidades básicas para el trabajo productivo","directriz_id"=>2),
                  array("nombre"=>"Promover una ética, cultura y educación liberadoras y solidarias","directriz_id"=>2),
                  array("nombre"=>"Profundizar la solidaridad con los excluidos de América Latina y el Caribe","directriz_id"=>2),
                  array("nombre"=>"Alcanzar irrevocablemente la democracia protagónica revolucionaria, en la cual, la mayoría soberana personifique el proceso sustantivo de toma de decisiones","directriz_id"=>3),
                  array("nombre"=>"Construir la base sociopolítica del Socialismo del Siglo XXI","directriz_id"=>3),
                  array("nombre"=>"Formar una nueva cultura política basada en la conciencia solidaria del ciudadano, de sus derechos y responsabilidades","directriz_id"=>3),
                  array("nombre"=>"Construir un sector público al servicio del ciudadano que conduzca a la transformación de la sociedad","directriz_id"=>3),
                  array("nombre"=>"Ampliar los espacios de participación ciudadana en la gestión pública","directriz_id"=>3),
                  array("nombre"=>"Fortalecer la práctica de la información veraz y oportuna por parte de los medios de comunicación masivos","directriz_id"=>3),
                  array("nombre"=>"Fomentar que los medios de comunicación masivos formen parte de la promoción y defensa de la soberanía nacional","directriz_id"=>3),
                  array("nombre"=>"Consolidar el sistema de comunicación nacional como instrumento para el fortalecimiento de la democracia protagónica revolucionaria y la formación ciudadana","directriz_id"=>3),
                  array("nombre"=>"Desarrollar el nuevo modelo productivo endógeno como base económica del Socialismo del Siglo XXI y alcanzar un crecimiento sostenido","directriz_id"=>4),
                  array("nombre"=>"Incrementar la soberanía alimentaria y consolidar la seguridad alimentaria","directriz_id"=>4),
                  array("nombre"=>"Fomentar la ciencia y la tecnología al servicio del desarrollo nacional y reducir diferencias en el acceso al conocimiento","directriz_id"=>4),
                  array("nombre"=>"Desarrollar la industria básica no energética, la manufactura y los servicios básicos","directriz_id"=>4),
                  array("nombre"=>"Profundizar la cohesión y la equidad socioterritorial","directriz_id"=>5),
                  array("nombre"=>"Desconcentrar actividades y población","directriz_id"=>5),
                  array("nombre"=>"Aprovechar las fortalezas regionales creando sinergia entre ellas","directriz_id"=>5),
                  array("nombre"=>"Hacer posible una ciudad incluyente con calidad de vida","directriz_id"=>5),
                  array("nombre"=>"Proteger espacios para conservar el agua y la biodiversidad","directriz_id"=>5),
                  array("nombre"=>"Elevar los niveles de conciencia ambiental en la población","directriz_id"=>5),
                  array("nombre"=>"Preservar el equilibrio de los ecosistemas ricos en biodiversidad","directriz_id"=>5),
                  array("nombre"=>"Alcanzar un modelo de producción y acumulación ambiental sustentable","directriz_id"=>5),
                  array("nombre"=>"Disminuir el impacto ambiental de la intervención humana","directriz_id"=>5),
                  array("nombre"=>"Recuperar los suelos y cuerpos de aguas degradados","directriz_id"=>5),
                  array("nombre"=>"Convertir a Venezuela en una potencia energética regional y fortalecer la integración energética latinoamericana y caribeña","directriz_id"=>6),
                  array("nombre"=>"Acelerar la siembra de petróleo, profundizando la internalización de los hidrocarburos para fortalecer la diversificación productiva y la inclusión social","directriz_id"=>6),
                  array("nombre"=>"Asegurar que la producción y el consumo de energía contribuyan a la preservación del ambiente","directriz_id"=>6),
                  array("nombre"=>"Propiciar, un cambio radical hacia la generación térmica de energía eléctrica adicional con base en el gas y otras fuentes de energía alternativas","directriz_id"=>6),
                  array("nombre"=>"Diversificar las relaciones políticas, económicas y culturales, de acuerdo con el establecimiento de áreas de interés geoestratégicas","directriz_id"=>7),
                  array("nombre"=>"Profundizar el dialogo fraterno entre los pueblos, el respeto de las libertade","directriz_id"=>7),
                  array("nombre"=>"Fortalecer la soberanía nacional vigorizando y ampliando las alianzas orientadasa la conformación del bloque geopolítico regional y de un mundo multipolar","directriz_id"=>7),              
            );
          
          $this->db->insert_batch('objetivo', $obj);
          $result.=$this->db->last_query()."\n"; 
          
          
          $estrategia=array(
                      array("nombre"=>"Desarrollar la conciencia revolucionaria (el nuevo ser humano)","directriz_id"=>1),
                      array("nombre"=>"Transformar la sociedad material y espiritualmente","directriz_id"=>1),
                      array("nombre"=>"Superar la ética del capital","directriz_id"=>1),
              
                      array("nombre"=>"Superar la pobreza y atender integralmente a la poblaciónen situación de extrema pobreza y máxima exclusión social","directriz_id"=>2),
                      array("nombre"=>"Profundizar la atención integral en salud de forma universal","directriz_id"=>2),
                      array("nombre"=>"Garantizar el acceso a una vivienda digna","directriz_id"=>2),
                      array("nombre"=>"Profundizar la universalización de la educación bolivariana","directriz_id"=>2),
                      array("nombre"=>"Masificar una cultura que fortalezca la identidad nacional, latinoamerica y caribeña","directriz_id"=>2),
                      array("nombre"=>"Garantizar una Seguridad Social universal y solidaria y los mecanismos institucionales del mercado de trabajo","directriz_id"=>2),
                      array("nombre"=>"Garantizar la administración de la biósfera para producir beneficios sustentables","directriz_id"=>2),
                      array("nombre"=>"Fomentar la participación organizada del pueblo en la planificación de la producción y la socialización equitativa de los excedentes","directriz_id"=>2),
              
                      array("nombre"=>"Fomentar la capacidad de toma de decisiones de la población","directriz_id"=>3),
                      array("nombre"=>"Convertir los espacios escolares, en espacios para la enseñanza y la práctica democrática","directriz_id"=>3),
                      array("nombre"=>"Desarrollar una red eficiente de vías de información y de educación no formal hacia el pueblo","directriz_id"=>3),
                      array("nombre"=>"Construir la estructura institucional necesaria para el desarrollo del poder popular","directriz_id"=>3),
                      array("nombre"=>"Garantizar la participación protagónica de la población en la administración pública nacional","directriz_id"=>3),
                      array("nombre"=>"Elevar los niveles de equidad, eficacia, eficiencia y calidad de la acción pública","directriz_id"=>3),
                      array("nombre"=>"Construir una nueva ética del servidor público","directriz_id"=>3),
                      array("nombre"=>"Combatir la corrupción de manera sistemática en todas sus manifestaciones","directriz_id"=>3),
                      array("nombre"=>"Fomentar la utilización de los medios de comunicación como instrumento de formación","directriz_id"=>3),
                      array("nombre"=>"Promover el equilibrio entre los deberes y derechos informativos y los comunicacionales de los ciudadanos y las ciudadanas","directriz_id"=>3),
                      array("nombre"=>"Universalizar el acceso a diferentes tipos de comunicación","directriz_id"=>3),
                      array("nombre"=>"Promover la soberanía comunicacional","directriz_id"=>3),
              
              
                     array("nombre"=>"Mejorar sustancialmente la distribución de la riqueza y el ingreso","directriz_id"=>4),
                     array("nombre"=>"Expandir la Economía Social cambiando el modelo de apropiación y distribución de excedentes","directriz_id"=>4),
                     array("nombre"=>"Fortalecer los sectores nacionales de manufactura y otros servicios","directriz_id"=>4),
                     array("nombre"=>"Asegurar una participación eficiente del Estado en la economía","directriz_id"=>4),
                     array("nombre"=>"Consolidar el carácter endógeno de la economía","directriz_id"=>4),
                     array("nombre"=>"Incrementar la participación de los productores y concertar la acción del Estado para la agricultura","directriz_id"=>4),
                     array("nombre"=>"Consolidar la revolución agraria y eliminar el latifundio","directriz_id"=>4),
                     array("nombre"=>"Mejorar y ampliar el marco de acción, los servicios y la dotación para la producción agrícola","directriz_id"=>4),
                     array("nombre"=>"Rescatar y ampliar la infraestructura para el medio rural y la producción","directriz_id"=>4),
                     array("nombre"=>"Incrementar la producción nacional de ciencia, tecnología e innovación hacia necesidades y potencialidades del país","directriz_id"=>4),
                     array("nombre"=>"Rediseñar y estructurar el Sistema Nacional de Ciencia, Tecnología e Innovación (SNCTI)","directriz_id"=>4),
                     array("nombre"=>"Incrementar la cultura científica","directriz_id"=>4),
                     array("nombre"=>"Mejorar el apoyo institucional para la ciencia, la tecnología y la innovación","directriz_id"=>4),

                     array("nombre"=>"Mejorar la infraestructura para la integración con América Latina y el Caribe","directriz_id"=>5),
                     array("nombre"=>"Integrar y desarrollar el territorio nacional a través de ejes y regiones","directriz_id"=>5),
                     array("nombre"=>"Ordenar el territorio asegurando la base de sustentación ecológica","directriz_id"=>5),
                     array("nombre"=>"Mejorar el hábitat de los principales centros urbanos","directriz_id"=>5),
                     array("nombre"=>"Reforzar el sistema de ciudades intermedias","directriz_id"=>5),
                     array("nombre"=>"Conservar y preservar ambientes naturales","directriz_id"=>5),
                     array("nombre"=>"Ajustar el metabolismo urbano disminuyendo la carga sobre el ambiente","directriz_id"=>5),
                     array("nombre"=>"Generar alternativas ante la explotación de los recursos no renovables","directriz_id"=>5),
              
              
                     array("nombre"=>"Profundizar la internalización de los hidrocarburos","directriz_id"=>6),
                     array("nombre"=>"Incrementar la producción de energía eléctrica, expandir y adaptar el sistema de producción y distribución","directriz_id"=>6),
                     array("nombre"=>"Propiciar el uso de fuentes de energía alternas, renovables y ambientalmente sostenibles","directriz_id"=>6),
                     array("nombre"=>"Promover el uso racional y eficiente de la energía","directriz_id"=>6),
                     array("nombre"=>"Profundizar la política de maximización de la captación de la renta petrolera en todas las fases del proceso","directriz_id"=>6),
                     array("nombre"=>"Preservar y mejorar el ambiente y la calidad de vida de las comunidades afectadas por la utilización de hidrocarburos, como fuente de energía","directriz_id"=>6),
                     array("nombre"=>"Fortalecer la integración latinoamericana y caribeña","directriz_id"=>6),
                     array("nombre"=>"Privilegiar la inversión en investigación y desarrollo tecnológico en materia de hidrocarburos","directriz_id"=>6),
              
              
                     array("nombre"=>"Avanzar en la transformación de los sistemas multilaterales de cooperación e integración, mundial, regional y local","directriz_id"=>7),
                     array("nombre"=>"Construir la institucionalidad de un nuevo orden de integración financiera y el establecimiento del comercio justo","directriz_id"=>7),
                     array("nombre"=>"Profundizar el intercambio cultural y la independencia científico, tecnológico y comunicacional","directriz_id"=>7),
                     array("nombre"=>"Mantener relaciones soberanas ante el bloque hegemónico mundial","directriz_id"=>7),
                     array("nombre"=>"Profundizar la integración con países de América Latina y el Caribe","directriz_id"=>7),
              
                     );
          
          $this->db->insert_batch('estrategia', $estrategia);
          $result.=$this->db->last_query()."\n"; 
          
          $politica=array(
                      array("nombre"=>"Rescatar los valores de la solidaridad humana","estrategia_id"=>1),
                      array("nombre"=>"Promover la conciencia colectiva","estrategia_id"=>1),
                      array("nombre"=>"Incentivar la nueva ética del hecho público: El ciudadano corresponsable de la vida pública","estrategia_id"=>1),
                      array("nombre"=>"Garantizar la justicia sin minar las bases del derecho","estrategia_id"=>1),
              
                      array("nombre"=>"Promover la nueva moral colectiva","estrategia_id"=>2),
                      array("nombre"=>"Mantener una tolerancia activa militante","estrategia_id"=>2),
                      array("nombre"=>"Trabajar dentro de una sociedad pluralista","estrategia_id"=>2),

                      array("nombre"=>"Fomentar el trabajo creador y productivo","estrategia_id"=>3),
                      array("nombre"=>"Articular lo material - institucional en el control del proceso del trabajo","estrategia_id"=>3),
              
                      array("nombre"=>"Prestar atención integral a niños, niñas y adolescentes","estrategia_id"=>4),
                      array("nombre"=>"Atender integralmente a adultos y adultas mayores","estrategia_id"=>4),
                      array("nombre"=>"Apoyar integralmente la población indígena","estrategia_id"=>4),
                      array("nombre"=>"Promover el desarrollo humano familiar y socio-laboral","estrategia_id"=>4),
                      array("nombre"=>"Fortalecer la accesibilidad a los alimentos","estrategia_id"=>4),
                      array("nombre"=>"Brindar atención integral a la población con discapacidades","estrategia_id"=>4),
              /*
                      array("nombre"=>"Desarrollar","estrategia_id"=>4),
                      array("nombre"=>"Desarrollar","estrategia_id"=>4),
               * 
               */
              );
          
          $this->db->insert_batch('politica', $politica);
          $result.=$this->db->last_query()."\n";
        return $result;
    }
}//fin class
?>