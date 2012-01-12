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
              
                      array("nombre"=>"Expandir y consolidar los servicios de salud de forma oportuna y gratuita","estrategia_id"=>5),
                      array("nombre"=>"Expandir y consolidar los servicios de salud de forma oportuna y gratuita","estrategia_id"=>5),
                      array("nombre"=>"Fortalecer la prevención y control de enfermedades","estrategia_id"=>5),
                      array("nombre"=>"Propiciar la seguridad y soberanía farmacéutica","estrategia_id"=>5),
                      array("nombre"=>"Incrementar la prevención de accidentes y de hechos violentos","estrategia_id"=>5),
                      array("nombre"=>"Optimizar la prevención del consumo de drogas y asegurar el tratamiento y la rehabilitación","estrategia_id"=>5),
              
                      array("nombre"=>"Garantizar la tenencia de la tierra","estrategia_id"=>6),
                      array("nombre"=>"Promover el acceso a los servicios básicos","estrategia_id"=>6),
                      array("nombre"=>"Promover mayor acceso al crédito habitacional","estrategia_id"=>6),
                      array("nombre"=>"Promover mayor acceso al crédito habitacional","estrategia_id"=>6),
                      
                      array("nombre"=>"Extender la cobertura de la matrícula escolar a toda la población, con énfasis en los excluidos","estrategia_id"=>7),
                      array("nombre"=>"Garantizar la permanencia y prosecución en el sistema educativo","estrategia_id"=>7),
                      array("nombre"=>"Fortalecer y promover la educación ambiental, la identidad cultural, la salud y la participación comunitaria","estrategia_id"=>7),
                      array("nombre"=>"Ampliar la infraestructura y la dotación escolar y deportiva","estrategia_id"=>7),
                      array("nombre"=>"Adecuar el sistema educativo al modelo productivo socialista","estrategia_id"=>7),
                      array("nombre"=>"Fortalecer e incentivar la investigación en el proceso educativo","estrategia_id"=>7),
                      array("nombre"=>"Incorporar las tecnologías de la información y la comunicación al proceso educativo","estrategia_id"=>7),
                      array("nombre"=>"Desarrollar la educación intercultural bilingüe","estrategia_id"=>7),
                      array("nombre"=>"Garantizar los accesos al conocimiento para universalizar la educación superior con pertinencia","estrategia_id"=>7),

                      array("nombre"=>"Salvaguardar y socializar el patrimonio cultural","estrategia_id"=>8),
                      array("nombre"=>"Insertar el movimiento cultural en los distintos espacios sociales","estrategia_id"=>8),
                      array("nombre"=>"Promover el potencial socio-cultural y económico de las diferentes manifestaciones del arte","estrategia_id"=>8),
                      array("nombre"=>"Promover el diálogo intercultural con los pueblos y culturas del mundo","estrategia_id"=>8),
                      array("nombre"=>"Fomentar la actualización permanente de nuestro pueblo en el entendimiento del mundo contemporáneo","estrategia_id"=>8),

                      array("nombre"=>"Avanzar en la garantía de prestaciones básicas universales","estrategia_id"=>9),
                      array("nombre"=>"Fortalecer los mecanismos institucionales del mercado de trabajo","estrategia_id"=>9),
                      array("nombre"=>"Apoyar la organización y la participación de los trabajadores en la gestión de las empresas","estrategia_id"=>9),

                      array("nombre"=>"Incentivar un modelo de producción y consumo ambientalmente sustentable","estrategia_id"=>10),
                      array("nombre"=>"Fomentar la gestión integral de los residuos, sustancias y desechos sólidos y peligrosos","estrategia_id"=>10),
                      array("nombre"=>"Garantizar la conservación y uso sustentable del recurso hídrico","estrategia_id"=>10),
                      array("nombre"=>"Propiciar la recuperación de áreas naturales","estrategia_id"=>10),
                      array("nombre"=>"Democratizar la propiedad de la tierra de los pueblos indígenas","estrategia_id"=>10),
              
                      array("nombre"=>"Apoyar la auto elevación del nivel de conciencia del pueblo en torno a la construcción de la estructura económica socialista","estrategia_id"=>11),
                      array("nombre"=>"Establecer mecanismos administrativos y control socialistas que puedan ser apropiados por el pueblo","estrategia_id"=>11),              
                      array("nombre"=>"Apoyar la participación equilibrada de productores, poder popular y Estado en la toma de decisiones, la gestión económica y en la distribución de excedentes","estrategia_id"=>11),              
              
                      array("nombre"=>"Difundir experiencias organizativas comunitarias","estrategia_id"=>12),
                      array("nombre"=>"Promover la formación de la organización social","estrategia_id"=>12),
                      array("nombre"=>"Crear canales efectivos para la contraloría social","estrategia_id"=>12),
              
                      array("nombre"=>"Impulsar e incentivar la formación docente","estrategia_id"=>13),
                      array("nombre"=>"Promover la participación escolar en actividades de la comunidad","estrategia_id"=>13),
                      array("nombre"=>"Incentivar el comportamiento y los valores democráticos","estrategia_id"=>13),
              
                      array("nombre"=>"Fortalecer la red de medios de comunicación alternativos","estrategia_id"=>14),
                      array("nombre"=>"Incentivar la creación y el fortalecimiento de vínculos y comunicación entre organizaciones sociales","estrategia_id"=>14),
                      array("nombre"=>"Promover canales de educación no tradicionales","estrategia_id"=>14),
              
                      array("nombre"=>"Crear canales regulares directos entre el poder popular y el resto de los poderes","estrategia_id"=>15),
                      array("nombre"=>"Fortalecer y crear mecanismos institucionales que privilegien la participación popular","estrategia_id"=>15),

                      array("nombre"=>"Identificar y responder a las necesidades no atendidas de la población","estrategia_id"=>16),
                      array("nombre"=>"Mejorar y fortalecer los instrumentos legales y los mecanismos institucionales de participación ciudadana ya establecidos","estrategia_id"=>16),
                      array("nombre"=>"Diseñar y consolidar nuevos mecanismos institucionales para la participación ciudadana en el sector público","estrategia_id"=>16),
              
                      array("nombre"=>"Propiciar la coherencia organizativa, funcional, procedimental y sistémica de los órganos públicos","estrategia_id"=>17),
                      array("nombre"=>"Incrementar los niveles de capacidad y conocimiento del funcionario público","estrategia_id"=>17),
                      array("nombre"=>"Implementar la simplificación de trámites administrativos a todos los niveles","estrategia_id"=>17),
                      array("nombre"=>"Instaurar y aplicar sistemas de evaluación de gestión de organismos y funcionarios","estrategia_id"=>17),
                      array("nombre"=>"Promover los principios de coordinación y cooperación inter-orgánica de la administración pública a todos los niveles","estrategia_id"=>17),

                      array("nombre"=>"Crear estímulos a los servidores públicos","estrategia_id"=>18),
                      array("nombre"=>"Ofrecer formación para su mejoramiento","estrategia_id"=>18),
                      array("nombre"=>"Cambiar la cultura actual del servidor público","estrategia_id"=>18),
              
                      array("nombre"=>"Garantizar la transparencia y democratización de la información","estrategia_id"=>19),
                      array("nombre"=>"Fortalecer y articular mecanismos internos y externos de seguimiento y control sobre la gestión pública","estrategia_id"=>19),
                      array("nombre"=>"Promover la corresponsabilidad de todos los agentes sociales y económicos","estrategia_id"=>19),
              
                      array("nombre"=>"Utilizar los medios de comunicación como instrumento de formación en valores ciudadanos","estrategia_id"=>20),
                      array("nombre"=>"Educar en la utilización responsable y crítica de los medios de comunicación","estrategia_id"=>20),
                      array("nombre"=>"Promover el control social de la población hacia los medios de comunicación masivos","estrategia_id"=>20),
              
                      array("nombre"=>"Facilitar el acceso de la población excluida a los medios de comunicación","estrategia_id"=>21),
                      array("nombre"=>"Estimular la participación ciudadana en la defensa de sus derechos y el cumplimiento de los deberes comunicacionales","estrategia_id"=>21),
              
                      array("nombre"=>"Fomentar el hábito de la lectura, el uso responsable de Internet y otras formas informáticas de comunicación e información","estrategia_id"=>22),
                      array("nombre"=>"Facilitar el acceso de las comunidades a los medios de comunicación","estrategia_id"=>22),
                      array("nombre"=>"Facilitar condiciones tecnológicas, educativas y financieras a los nuevos emprendedores comunicacionales","estrategia_id"=>22),
                      array("nombre"=>"Establecer como obligatorio la utilización de códigos especiales de comunicación para los discapacitados","estrategia_id"=>22),
                      array("nombre"=>"Fortalecer los medios de comunicación e información del Estado y democratizar sus espacios de comunicación","estrategia_id"=>22),

                      array("nombre"=>"Proyectar el patrimonio cultural, geográfico, turístico y ambiental de Venezuela","estrategia_id"=>23),
                      array("nombre"=>"Construir redes de comunicación y medios de expresión de la palabra, la imagen y las voces de nuestros pueblos","estrategia_id"=>23),
                      array("nombre"=>"Crear un ente internacional centrado en la organización de los medios comunitarios alternativos","estrategia_id"=>23),

                      array("nombre"=>"Mejorar el poder adquisitivo y el nivel económico de las familias de ingresos bajos y medios","estrategia_id"=>24),
                      array("nombre"=>"Abatir la inflación de manera consistente","estrategia_id"=>24),
                      array("nombre"=>"Reducir el desempleo y la informalidad","estrategia_id"=>24),
                      array("nombre"=>"Promover el ahorro interno con equidad","estrategia_id"=>24),
              
                      array("nombre"=>"Fortalecer los mecanismos de creación y desarrollo de EPS y de redes en la Economía Social","estrategia_id"=>25),
                      array("nombre"=>"Fortalecer la sostenibilidad de la Economía Social","estrategia_id"=>25),
                      array("nombre"=>"Estimular diferentes formas de propiedad social","estrategia_id"=>25),
                      array("nombre"=>"Transformar empresas del Estado en EPS","estrategia_id"=>25),
              
                      array("nombre"=>"Aplicar estímulos financieros y fiscales diferenciados","estrategia_id"=>26),
                      array("nombre"=>"Estimular la utilización del capital privado internamente","estrategia_id"=>26),
                      array("nombre"=>"Concentrar esfuerzos en las cadenas productivas con ventajas comparativas","estrategia_id"=>26),
                      array("nombre"=>"Promover el aumento de la productividad","estrategia_id"=>26),
              

                      array("nombre"=>"Promover la estabilidad y sostenibilidad del gasto","estrategia_id"=>27),
                      array("nombre"=>"Reordenar el sistema tributario","estrategia_id"=>27),
                      array("nombre"=>"Aumentar la inversión en actividades estratégicas","estrategia_id"=>27),
              
                      array("nombre"=>"Coordinar la acción del Estado para el desarrollo regional y local","estrategia_id"=>28),
                      array("nombre"=>"Promover el desarrollo del tejido industrial","estrategia_id"=>28),
                      array("nombre"=>"Aplicar una política comercial exterior e interior consistentes con el desarrollo endógeno","estrategia_id"=>28),
              
                      array("nombre"=>"Focalizar la acción sectorial del Estado","estrategia_id"=>29),
                      array("nombre"=>"Establecer espacios de concertación","estrategia_id"=>29),

                      array("nombre"=>"Culminar el catastro de tierras","estrategia_id"=>30),
                      array("nombre"=>"Expropiar y rescatar tierras ociosas o sin propiedad fundamentada","estrategia_id"=>30),
                      array("nombre"=>"Incorporar tierras a la producción y orientar su usol","estrategia_id"=>30),
                      array("nombre"=>"Aplicar el impuesto predial","estrategia_id"=>30),

                      array("nombre"=>"Financiar en condiciones preferenciales la inversión y la producción","estrategia_id"=>31),
                      array("nombre"=>"Promover un intercambio comercial acorde con el desarrollo agrícola endógeno","estrategia_id"=>31),
                      array("nombre"=>"Capacitar y apoyar a los productores para la agricultura sustentable y el desarrollo endógeno","estrategia_id"=>31),
                      array("nombre"=>"Dotar de maquinarias, insumos y servicios para la producción","estrategia_id"=>31),
                      array("nombre"=>"Mejorar los servicios de sanidad agropecuaria y de los alimentos","estrategia_id"=>31),
              
                      array("nombre"=>"Rescatar, ampliar y desarrollar el riego y saneamiento","estrategia_id"=>32),
                      array("nombre"=>"Ampliar y mantener la vialidad, transporte y conservación","estrategia_id"=>32),
                      array("nombre"=>"Consolidar la capacidad del Estado en procesamiento y servicios y transformarla en Economía Social","estrategia_id"=>32),
                      array("nombre"=>"Desarrollar los centros poblados","estrategia_id"=>32),
              
                      array("nombre"=>"Fomentar la investigación y desarrollo para la soberanía alimentaria","estrategia_id"=>33),
                      array("nombre"=>"Incrementar la infraestructura tecnológica","estrategia_id"=>33),
                      array("nombre"=>"Apoyar la pequeña y mediana industria y las cooperativas","estrategia_id"=>33),
                      array("nombre"=>"Propiciar la diversificación productiva en la actividad manufacturera, minera y forestal","estrategia_id"=>33),
                      array("nombre"=>"Resguardar el conocimiento colectivo de los pueblos originarios","estrategia_id"=>33),
              
                      array("nombre"=>"Fortalecer centros de investigación y desarrollo en las regiones","estrategia_id"=>34),
                      array("nombre"=>"Apoyar y fortalecer la prosecución de carreras científicas y posgrados, y garantizar el mejoramiento de los docentes","estrategia_id"=>34),
                      array("nombre"=>"Apoyar la conformación de redes científicas nacionales, regionales e internacionales privilegiando las prioridades del país","estrategia_id"=>34),
                      array("nombre"=>"Generar vínculos entre los investigadores universitarios y las unidades de investigación de las empresas productivas","estrategia_id"=>34),
                      array("nombre"=>"Identificar los retornos de los resultados de las investigaciones, a traves de indicadores que consideren el impacto en la solución de problemas","estrategia_id"=>34),
                      array("nombre"=>"Crear y aplicar contenidos programáticos para el uso de tecnologías de información y comunicación","estrategia_id"=>34),

                      array("nombre"=>"Programar y aplicar incentivos hacia las propuestas innovadoras de los grupos excluidos","estrategia_id"=>35),
                      array("nombre"=>"Crear seguridad social y estímulo para los jóvenes que se dediquen a la investigación","estrategia_id"=>35),
                      array("nombre"=>"Crear sistemas de evaluación, certificación, promoción y divulgación de los hallazgos e innovaciones","estrategia_id"=>35),
                      array("nombre"=>"Potenciar redes de conocimiento y de capacitación para el trabajo en todos los niveles educativos","estrategia_id"=>35),
                      array("nombre"=>"Identificar y utilizar las fortalezas del talento humano nacional","estrategia_id"=>35),
                      array("nombre"=>"Crear plataformas tecnológicas para el acceso del ciudadano común","estrategia_id"=>35),

                      array("nombre"=>"Simplificar los trámites para la obtención de patentes y reducir costos","estrategia_id"=>36),
                      array("nombre"=>"Vincular las potencialidades humanas con las necesidades nacionales y regionales","estrategia_id"=>36),
                      array("nombre"=>"Garantizar la distribución generalizada de tecnología de la información y la comunicación en todo el territorio nacional","estrategia_id"=>36),
                      array("nombre"=>"Divulgar y adoptar las normas de calidad internacional que permitan ofrecer propuestas competitivas","estrategia_id"=>36),
                      array("nombre"=>"Actualizar el banco de patentes y modernizar los sistemas de información","estrategia_id"=>36),
                      array("nombre"=>"Divulgar los resultados de los esfuerzos de innovación para lograr visibilidad, impacto y estímulo","estrategia_id"=>36),

                      array("nombre"=>"Ampliar la accesibilidad con la fachada andina","estrategia_id"=>37),
                      array("nombre"=>"Reforzar la accesibilidad hacia las fachadas amazónica y caribeña","estrategia_id"=>37),
                      array("nombre"=>"Fortalecer la presencia del Estado en las Zonas de Integración Fronteriza","estrategia_id"=>37),
              
                      array("nombre"=>"Dinamizar las regiones en base a complementariedades y articulación de espacios productivos","estrategia_id"=>38),
                      array("nombre"=>"Desarrollar sinergias entre sistemas de producción social","estrategia_id"=>38),
                      array("nombre"=>"Alcanzar la integración territorial de la nación mediante los corredores de infraestructuras que conformarán ejes de integracióny desarrollo","estrategia_id"=>38),
              
                      array("nombre"=>"Conservar las cuencas hidrográficas y la biodiversidad","estrategia_id"=>39),
                      array("nombre"=>"Formular los planes de ordenación del territorio","estrategia_id"=>39),
                      array("nombre"=>"Disminuir la vulnerabilidad de la población tomando en cuenta las zonas de riesgo","estrategia_id"=>39),
              
                      array("nombre"=>"Orientar y apoyar la prestación de servicios públicos con énfasis en reducción del impacto ambiental","estrategia_id"=>40),
                      array("nombre"=>"Aplicar impuestos por mejoras y a los terrenos ociosos o subutilizados","estrategia_id"=>40),
                      array("nombre"=>"Rehabilitar áreas centrales deterioradas","estrategia_id"=>40),
              
                      array("nombre"=>"Alcanzar la complementaridad funcional entre ciudades intermedias en el Eje Norte Llanero","estrategia_id"=>41),
                      array("nombre"=>"Generar una estructura urbana incluyente en los centros intermedios","estrategia_id"=>41),
              
                      array("nombre"=>"Restringir las actividades en áreas de preservación","estrategia_id"=>42),
                      array("nombre"=>"Reforzar las prácticas conservacionistas de los pueblos indígenas en sus territorios ancestrales","estrategia_id"=>42),
                      array("nombre"=>"Manejar adecuadamente las Áreas Bajo Régimen de Administración Especial y demás áreas protegidas","estrategia_id"=>42),
                      array("nombre"=>"Recuperar y mejorar los principales lagos y sus afluentes","estrategia_id"=>42),
                      array("nombre"=>"Intervenir lo rural amigable con el ambiente","estrategia_id"=>42),              

                      array("nombre"=>"Promover la ciudad compacta con alta densidad y baja altura","estrategia_id"=>43),
                      array("nombre"=>"Incrementar el uso de sistemas de transporte eficientes en energía y tiempo","estrategia_id"=>43),
                      array("nombre"=>"Promover una ciudad energéticamente eficiente","estrategia_id"=>43),
                      array("nombre"=>"Incorporar tecnologías de construcción compatibles con el ambiente","estrategia_id"=>43),

                      array("nombre"=>"Promover la incorporación de energías alternativas basadas en recursos renovables","estrategia_id"=>44),
                      array("nombre"=>"Incidir en el cambio del patrón productivo hacia tecnologías verdes","estrategia_id"=>44),
                      array("nombre"=>"Promover patrones sostenibles de consumo","estrategia_id"=>44),
                      array("nombre"=>"Reinvertir los beneficios de la explotación de recursos no renovables en el incremento de la inversión en investigación y desarrollo","estrategia_id"=>44),
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