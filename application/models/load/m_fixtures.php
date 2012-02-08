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
         
         
         $this->db->truncate('polidos');
         $result.=$this->db->last_query()."\n";
         
         
         $this->db->truncate('estrados');
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('objedos');
         $result.=$this->db->last_query()."\n";
         
         $this->db->truncate('lineas');
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
            
                    array("nombre"=>"Proyectos","url"=>"proyectos","parent"=>NULL,"grupo"=>",2,"),
                    array("nombre"=>"Nuevo","url"=>"nuevo_proyecto","parent"=>7,"grupo"=>",2,"),
                    array("nombre"=>"Modificar","url"=>"modificar_proyecto","parent"=>7,"grupo"=>",2,"),
            
            );
         
         $this->db->insert_batch('menu', $menues);
          $result.=$this->db->last_query()."\n";
          
         
            $users=array(
                        array("userLogin"=>"admin","passwordLogin"=>"VqN3dmdcRki+6mClS6aKJTs+Pus4t9nANXtKAuLJzDyAmyuNshQ5hHhOOGgC+MnqFZog+5XkE5k5IRs/4HyfnA==","nombre"=>"Jean C","apellido"=>"Mendoza","correo"=>"jeanmendozar@gmail.com","organo_id"=>1,"grupo_id"=>1,"status_id"=>1),
                        array("userLogin"=>"py","passwordLogin"=>"VqN3dmdcRki+6mClS6aKJTs+Pus4t9nANXtKAuLJzDyAmyuNshQ5hHhOOGgC+MnqFZog+5XkE5k5IRs/4HyfnA==","nombre"=>"Proyectos","apellido"=>"Prueba","correo"=>"dgparagua@gmail.com","organo_id"=>1,"grupo_id"=>2,"status_id"=>1),
            ); 
          $this->db->insert_batch('users', $users);
           $result.=$this->db->last_query()."\n";
          
          $sql='
    -- -----------------------------------------------------
    -- Table `lineas`
    -- -----------------------------------------------------
    CREATE  TABLE IF NOT EXISTS `lineas` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `opcion` VARCHAR(45) NOT NULL ,
      `delete` TINYINT(1)  NOT NULL DEFAULT false ,
      PRIMARY KEY (`id`) )
    ENGINE = InnoDB;


    -- -----------------------------------------------------
    -- Table `objedos`
    -- -----------------------------------------------------
    CREATE  TABLE IF NOT EXISTS `objedos` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `opcion` VARCHAR(200) NOT NULL ,
      `relacion` INT NOT NULL ,
      `delete` TINYINT(1)  NOT NULL DEFAULT false ,
      PRIMARY KEY (`id`) ,
      INDEX `fk_objetivo_directriz1` (`relacion` ASC) ,
      CONSTRAINT `fk_objetivo_directriz1`
        FOREIGN KEY (`relacion` )
        REFERENCES `lineas` (`id` )
        ON DELETE RESTRICT
        ON UPDATE RESTRICT)
    ENGINE = InnoDB;


    -- -----------------------------------------------------
    -- Table `estrados`
    -- -----------------------------------------------------
    CREATE  TABLE IF NOT EXISTS `estrados` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `opcion` VARCHAR(200) NOT NULL ,
      `relacion` INT NOT NULL ,
      `delete` TINYINT(1)  NOT NULL DEFAULT false ,
      PRIMARY KEY (`id`) ,
      INDEX `fk_estrategia_directriz1` (`relacion` ASC) ,
      CONSTRAINT `fk_estrategia_directriz1`
        FOREIGN KEY (`relacion` )
        REFERENCES `lineas` (`id` )
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB;


    -- -----------------------------------------------------
    -- Table `polidos`
    -- -----------------------------------------------------
    CREATE  TABLE IF NOT EXISTS `polidos` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `opcion` VARCHAR(200) NOT NULL ,
      `relacion` INT NOT NULL ,
      `delete` TINYINT(1)  NOT NULL DEFAULT false ,
      PRIMARY KEY (`id`) ,
      INDEX `fk_politica_estrategia1` (`relacion` ASC) ,
      CONSTRAINT `fk_politica_estrategia1`
        FOREIGN KEY (`relacion` )
        REFERENCES `estrados` (`id` )
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB;
';
          /*$this->db->query($sql);
           $result.=$this->db->last_query()."\n";*/
          
          
            $directriz=array(
                    array("opcion"=>"Nueva Ética Socialista"),
                    array("opcion"=>"Suprema Felicidad Social"),
                    array("opcion"=>"Democracia Protagónica y Revolucionaria"),
                    array("opcion"=>"Modelo Productivo Socialista"),
                    array("opcion"=>"Nueva Geopolítica Nacional"),
                    array("opcion"=>"Venezuela : Potencia Energética Mundial"),
                    array("opcion"=>"Nueva Geopolítica Internacional"),
            );
           
          $this->db->insert_batch('lineas', $directriz);
          $result.=$this->db->last_query()."\n";
         
          $obj=array(
                  array("opcion"=>"Refundar ética y moralmente la Nación","relacion"=>1),
                  array("opcion"=>"Reducir la miseria a cero y acelerar la disminución de la pobreza","relacion"=>2),
                  array("opcion"=>"Transformar las relaciones sociales de producción construyendo unas de tipo socialistas basadas en la propiedad social","relacion"=>2),
                  array("opcion"=>"Fortalecer las capacidades básicas para el trabajo productivo","relacion"=>2),
                  array("opcion"=>"Promover una ética, cultura y educación liberadoras y solidarias","relacion"=>2),
                  array("opcion"=>"Profundizar la solidaridad con los excluidos de América Latina y el Caribe","relacion"=>2),
                  array("opcion"=>"Alcanzar irrevocablemente la democracia protagónica revolucionaria, en la cual, la mayoría soberana personifique el proceso sustantivo de toma de decisiones","relacion"=>3),
                  array("opcion"=>"Construir la base sociopolítica del Socialismo del Siglo XXI","relacion"=>3),
                  array("opcion"=>"Formar una nueva cultura política basada en la conciencia solidaria del ciudadano, de sus derechos y responsabilidades","relacion"=>3),
                  array("opcion"=>"Construir un sector público al servicio del ciudadano que conduzca a la transformación de la sociedad","relacion"=>3),
                  array("opcion"=>"Ampliar los espacios de participación ciudadana en la gestión pública","relacion"=>3),
                  array("opcion"=>"Fortalecer la práctica de la información veraz y oportuna por parte de los medios de comunicación masivos","relacion"=>3),
                  array("opcion"=>"Fomentar que los medios de comunicación masivos formen parte de la promoción y defensa de la soberanía nacional","relacion"=>3),
                  array("opcion"=>"Consolidar el sistema de comunicación nacional como instrumento para el fortalecimiento de la democracia protagónica revolucionaria y la formación ciudadana","relacion"=>3),
                  array("opcion"=>"Desarrollar el nuevo modelo productivo endógeno como base económica del Socialismo del Siglo XXI y alcanzar un crecimiento sostenido","relacion"=>4),
                  array("opcion"=>"Incrementar la soberanía alimentaria y consolidar la seguridad alimentaria","relacion"=>4),
                  array("opcion"=>"Fomentar la ciencia y la tecnología al servicio del desarrollo nacional y reducir diferencias en el acceso al conocimiento","relacion"=>4),
                  array("opcion"=>"Desarrollar la industria básica no energética, la manufactura y los servicios básicos","relacion"=>4),
                  array("opcion"=>"Profundizar la cohesión y la equidad socioterritorial","relacion"=>5),
                  array("opcion"=>"Desconcentrar actividades y población","relacion"=>5),
                  array("opcion"=>"Aprovechar las fortalezas regionales creando sinergia entre ellas","relacion"=>5),
                  array("opcion"=>"Hacer posible una ciudad incluyente con calidad de vida","relacion"=>5),
                  array("opcion"=>"Proteger espacios para conservar el agua y la biodiversidad","relacion"=>5),
                  array("opcion"=>"Elevar los niveles de conciencia ambiental en la población","relacion"=>5),
                  array("opcion"=>"Preservar el equilibrio de los ecosistemas ricos en biodiversidad","relacion"=>5),
                  array("opcion"=>"Alcanzar un modelo de producción y acumulación ambiental sustentable","relacion"=>5),
                  array("opcion"=>"Disminuir el impacto ambiental de la intervención humana","relacion"=>5),
                  array("opcion"=>"Recuperar los suelos y cuerpos de aguas degradados","relacion"=>5),
                  array("opcion"=>"Convertir a Venezuela en una potencia energética regional y fortalecer la integración energética latinoamericana y caribeña","relacion"=>6),
                  array("opcion"=>"Acelerar la siembra de petróleo, profundizando la internalización de los hidrocarburos para fortalecer la diversificación productiva y la inclusión social","relacion"=>6),
                  array("opcion"=>"Asegurar que la producción y el consumo de energía contribuyan a la preservación del ambiente","relacion"=>6),
                  array("opcion"=>"Propiciar, un cambio radical hacia la generación térmica de energía eléctrica adicional con base en el gas y otras fuentes de energía alternativas","relacion"=>6),
                  array("opcion"=>"Diversificar las relaciones políticas, económicas y culturales, de acuerdo con el establecimiento de áreas de interés geoestratégicas","relacion"=>7),
                  array("opcion"=>"Profundizar el dialogo fraterno entre los pueblos, el respeto de las libertade","relacion"=>7),
                  array("opcion"=>"Fortalecer la soberanía nacional vigorizando y ampliando las alianzas orientadasa la conformación del bloque geopolítico regional y de un mundo multipolar","relacion"=>7),
            );
          
          $this->db->insert_batch('objedos', $obj);
          $result.=$this->db->last_query()."\n";
          
          
          $estrategia=array(
                      array("opcion"=>"Desarrollar la conciencia revolucionaria (el nuevo ser humano)","relacion"=>1),
                      array("opcion"=>"Transformar la sociedad material y espiritualmente","relacion"=>1),
                      array("opcion"=>"Superar la ética del capital","relacion"=>1),
              
                      array("opcion"=>"Superar la pobreza y atender integralmente a la poblaciónen situación de extrema pobreza y máxima exclusión social","relacion"=>2),
                      array("opcion"=>"Profundizar la atención integral en salud de forma universal","relacion"=>2),
                      array("opcion"=>"Garantizar el acceso a una vivienda digna","relacion"=>2),
                      array("opcion"=>"Profundizar la universalización de la educación bolivariana","relacion"=>2),
                      array("opcion"=>"Masificar una cultura que fortalezca la identidad nacional, latinoamerica y caribeña","relacion"=>2),
                      array("opcion"=>"Garantizar una Seguridad Social universal y solidaria y los mecanismos institucionales del mercado de trabajo","relacion"=>2),
                      array("opcion"=>"Garantizar la administración de la biósfera para producir beneficios sustentables","relacion"=>2),
                      array("opcion"=>"Fomentar la participación organizada del pueblo en la planificación de la producción y la socialización equitativa de los excedentes","relacion"=>2),
              
                      array("opcion"=>"Fomentar la capacidad de toma de decisiones de la población","relacion"=>3),
                      array("opcion"=>"Convertir los espacios escolares, en espacios para la enseñanza y la práctica democrática","relacion"=>3),
                      array("opcion"=>"Desarrollar una red eficiente de vías de información y de educación no formal hacia el pueblo","relacion"=>3),
                      array("opcion"=>"Construir la estructura institucional necesaria para el desarrollo del poder popular","relacion"=>3),
                      array("opcion"=>"Garantizar la participación protagónica de la población en la administración pública nacional","relacion"=>3),
                      array("opcion"=>"Elevar los niveles de equidad, eficacia, eficiencia y calidad de la acción pública","relacion"=>3),
                      array("opcion"=>"Construir una nueva ética del servidor público","relacion"=>3),
                      array("opcion"=>"Combatir la corrupción de manera sistemática en todas sus manifestaciones","relacion"=>3),
                      array("opcion"=>"Fomentar la utilización de los medios de comunicación como instrumento de formación","relacion"=>3),
                      array("opcion"=>"Promover el equilibrio entre los deberes y derechos informativos y los comunicacionales de los ciudadanos y las ciudadanas","relacion"=>3),
                      array("opcion"=>"Universalizar el acceso a diferentes tipos de comunicación","relacion"=>3),
                      array("opcion"=>"Promover la soberanía comunicacional","relacion"=>3),
              
              
                     array("opcion"=>"Mejorar sustancialmente la distribución de la riqueza y el ingreso","relacion"=>4),
                     array("opcion"=>"Expandir la Economía Social cambiando el modelo de apropiación y distribución de excedentes","relacion"=>4),
                     array("opcion"=>"Fortalecer los sectores nacionales de manufactura y otros servicios","relacion"=>4),
                     array("opcion"=>"Asegurar una participación eficiente del Estado en la economía","relacion"=>4),
                     array("opcion"=>"Consolidar el carácter endógeno de la economía","relacion"=>4),
                     array("opcion"=>"Incrementar la participación de los productores y concertar la acción del Estado para la agricultura","relacion"=>4),
                     array("opcion"=>"Consolidar la revolución agraria y eliminar el latifundio","relacion"=>4),
                     array("opcion"=>"Mejorar y ampliar el marco de acción, los servicios y la dotación para la producción agrícola","relacion"=>4),
                     array("opcion"=>"Rescatar y ampliar la infraestructura para el medio rural y la producción","relacion"=>4),
                     array("opcion"=>"Incrementar la producción nacional de ciencia, tecnología e innovación hacia necesidades y potencialidades del país","relacion"=>4),
                     array("opcion"=>"Rediseñar y estructurar el Sistema Nacional de Ciencia, Tecnología e Innovación (SNCTI)","relacion"=>4),
                     array("opcion"=>"Incrementar la cultura científica","relacion"=>4),
                     array("opcion"=>"Mejorar el apoyo institucional para la ciencia, la tecnología y la innovación","relacion"=>4),

                     array("opcion"=>"Mejorar la infraestructura para la integración con América Latina y el Caribe","relacion"=>5),
                     array("opcion"=>"Integrar y desarrollar el territorio nacional a través de ejes y regiones","relacion"=>5),
                     array("opcion"=>"Ordenar el territorio asegurando la base de sustentación ecológica","relacion"=>5),
                     array("opcion"=>"Mejorar el hábitat de los principales centros urbanos","relacion"=>5),
                     array("opcion"=>"Reforzar el sistema de ciudades intermedias","relacion"=>5),
                     array("opcion"=>"Conservar y preservar ambientes naturales","relacion"=>5),
                     array("opcion"=>"Ajustar el metabolismo urbano disminuyendo la carga sobre el ambiente","relacion"=>5),
                     array("opcion"=>"Generar alternativas ante la explotación de los recursos no renovables","relacion"=>5),
              
              
                     array("opcion"=>"Profundizar la internalización de los hidrocarburos","relacion"=>6),
                     array("opcion"=>"Incrementar la producción de energía eléctrica, expandir y adaptar el sistema de producción y distribución","relacion"=>6),
                     array("opcion"=>"Propiciar el uso de fuentes de energía alternas, renovables y ambientalmente sostenibles","relacion"=>6),
                     array("opcion"=>"Promover el uso racional y eficiente de la energía","relacion"=>6),
                     array("opcion"=>"Profundizar la política de maximización de la captación de la renta petrolera en todas las fases del proceso","relacion"=>6),
                     array("opcion"=>"Preservar y mejorar el ambiente y la calidad de vida de las comunidades afectadas por la utilización de hidrocarburos, como fuente de energía","relacion"=>6),
                     array("opcion"=>"Fortalecer la integración latinoamericana y caribeña","relacion"=>6),
                     array("opcion"=>"Privilegiar la inversión en investigación y desarrollo tecnológico en materia de hidrocarburos","relacion"=>6),
              
              
                     array("opcion"=>"Avanzar en la transformación de los sistemas multilaterales de cooperación e integración, mundial, regional y local","relacion"=>7),
                     array("opcion"=>"Construir la institucionalidad de un nuevo orden de integración financiera y el establecimiento del comercio justo","relacion"=>7),
                     array("opcion"=>"Profundizar el intercambio cultural y la independencia científico, tecnológico y comunicacional","relacion"=>7),
                     array("opcion"=>"Mantener relaciones soberanas ante el bloque hegemónico mundial","relacion"=>7),
                     array("opcion"=>"Profundizar la integración con países de América Latina y el Caribe","relacion"=>7),
              
                     );
          
          $this->db->insert_batch('estrados', $estrategia);
          $result.=$this->db->last_query()."\n";
          
          $politica=array(
                      array("opcion"=>"Rescatar los valores de la solidaridad humana","relacion"=>1),
                      array("opcion"=>"Promover la conciencia colectiva","relacion"=>1),
                      array("opcion"=>"Incentivar la nueva ética del hecho público: El ciudadano corresponsable de la vida pública","relacion"=>1),
                      array("opcion"=>"Garantizar la justicia sin minar las bases del derecho","relacion"=>1),
              
                      array("opcion"=>"Promover la nueva moral colectiva","relacion"=>2),
                      array("opcion"=>"Mantener una tolerancia activa militante","relacion"=>2),
                      array("opcion"=>"Trabajar dentro de una sociedad pluralista","relacion"=>2),

                      array("opcion"=>"Fomentar el trabajo creador y productivo","relacion"=>3),
                      array("opcion"=>"Articular lo material - institucional en el control del proceso del trabajo","relacion"=>3),
              
                      array("opcion"=>"Prestar atención integral a niños, niñas y adolescentes","relacion"=>4),
                      array("opcion"=>"Atender integralmente a adultos y adultas mayores","relacion"=>4),
                      array("opcion"=>"Apoyar integralmente la población indígena","relacion"=>4),
                      array("opcion"=>"Promover el desarrollo humano familiar y socio-laboral","relacion"=>4),
                      array("opcion"=>"Fortalecer la accesibilidad a los alimentos","relacion"=>4),
                      array("opcion"=>"Brindar atención integral a la población con discapacidades","relacion"=>4),
              
                      array("opcion"=>"Expandir y consolidar los servicios de salud de forma oportuna y gratuita","relacion"=>5),
                      array("opcion"=>"Expandir y consolidar los servicios de salud de forma oportuna y gratuita","relacion"=>5),
                      array("opcion"=>"Fortalecer la prevención y control de enfermedades","relacion"=>5),
                      array("opcion"=>"Propiciar la seguridad y soberanía farmacéutica","relacion"=>5),
                      array("opcion"=>"Incrementar la prevención de accidentes y de hechos violentos","relacion"=>5),
                      array("opcion"=>"Optimizar la prevención del consumo de drogas y asegurar el tratamiento y la rehabilitación","relacion"=>5),
              
                      array("opcion"=>"Garantizar la tenencia de la tierra","relacion"=>6),
                      array("opcion"=>"Promover el acceso a los servicios básicos","relacion"=>6),
                      array("opcion"=>"Promover mayor acceso al crédito habitacional","relacion"=>6),
                      array("opcion"=>"Promover mayor acceso al crédito habitacional","relacion"=>6),
                      
                      array("opcion"=>"Extender la cobertura de la matrícula escolar a toda la población, con énfasis en los excluidos","relacion"=>7),
                      array("opcion"=>"Garantizar la permanencia y prosecución en el sistema educativo","relacion"=>7),
                      array("opcion"=>"Fortalecer y promover la educación ambiental, la identidad cultural, la salud y la participación comunitaria","relacion"=>7),
                      array("opcion"=>"Ampliar la infraestructura y la dotación escolar y deportiva","relacion"=>7),
                      array("opcion"=>"Adecuar el sistema educativo al modelo productivo socialista","relacion"=>7),
                      array("opcion"=>"Fortalecer e incentivar la investigación en el proceso educativo","relacion"=>7),
                      array("opcion"=>"Incorporar las tecnologías de la información y la comunicación al proceso educativo","relacion"=>7),
                      array("opcion"=>"Desarrollar la educación intercultural bilingüe","relacion"=>7),
                      array("opcion"=>"Garantizar los accesos al conocimiento para universalizar la educación superior con pertinencia","relacion"=>7),

                      array("opcion"=>"Salvaguardar y socializar el patrimonio cultural","relacion"=>8),
                      array("opcion"=>"Insertar el movimiento cultural en los distintos espacios sociales","relacion"=>8),
                      array("opcion"=>"Promover el potencial socio-cultural y económico de las diferentes manifestaciones del arte","relacion"=>8),
                      array("opcion"=>"Promover el diálogo intercultural con los pueblos y culturas del mundo","relacion"=>8),
                      array("opcion"=>"Fomentar la actualización permanente de nuestro pueblo en el entendimiento del mundo contemporáneo","relacion"=>8),

                      array("opcion"=>"Avanzar en la garantía de prestaciones básicas universales","relacion"=>9),
                      array("opcion"=>"Fortalecer los mecanismos institucionales del mercado de trabajo","relacion"=>9),
                      array("opcion"=>"Apoyar la organización y la participación de los trabajadores en la gestión de las empresas","relacion"=>9),

                      array("opcion"=>"Incentivar un modelo de producción y consumo ambientalmente sustentable","relacion"=>10),
                      array("opcion"=>"Fomentar la gestión integral de los residuos, sustancias y desechos sólidos y peligrosos","relacion"=>10),
                      array("opcion"=>"Garantizar la conservación y uso sustentable del recurso hídrico","relacion"=>10),
                      array("opcion"=>"Propiciar la recuperación de áreas naturales","relacion"=>10),
                      array("opcion"=>"Democratizar la propiedad de la tierra de los pueblos indígenas","relacion"=>10),
              
                      array("opcion"=>"Apoyar la auto elevación del nivel de conciencia del pueblo en torno a la construcción de la estructura económica socialista","relacion"=>11),
                      array("opcion"=>"Establecer mecanismos administrativos y control socialistas que puedan ser apropiados por el pueblo","relacion"=>11),
                      array("opcion"=>"Apoyar la participación equilibrada de productores, poder popular y Estado en la toma de decisiones, la gestión económica y en la distribución de excedentes","relacion"=>11),
              
                      array("opcion"=>"Difundir experiencias organizativas comunitarias","relacion"=>12),
                      array("opcion"=>"Promover la formación de la organización social","relacion"=>12),
                      array("opcion"=>"Crear canales efectivos para la contraloría social","relacion"=>12),
              
                      array("opcion"=>"Impulsar e incentivar la formación docente","relacion"=>13),
                      array("opcion"=>"Promover la participación escolar en actividades de la comunidad","relacion"=>13),
                      array("opcion"=>"Incentivar el comportamiento y los valores democráticos","relacion"=>13),
              
                      array("opcion"=>"Fortalecer la red de medios de comunicación alternativos","relacion"=>14),
                      array("opcion"=>"Incentivar la creación y el fortalecimiento de vínculos y comunicación entre organizaciones sociales","relacion"=>14),
                      array("opcion"=>"Promover canales de educación no tradicionales","relacion"=>14),
              
                      array("opcion"=>"Crear canales regulares directos entre el poder popular y el resto de los poderes","relacion"=>15),
                      array("opcion"=>"Fortalecer y crear mecanismos institucionales que privilegien la participación popular","relacion"=>15),

                      array("opcion"=>"Identificar y responder a las necesidades no atendidas de la población","relacion"=>16),
                      array("opcion"=>"Mejorar y fortalecer los instrumentos legales y los mecanismos institucionales de participación ciudadana ya establecidos","relacion"=>16),
                      array("opcion"=>"Diseñar y consolidar nuevos mecanismos institucionales para la participación ciudadana en el sector público","relacion"=>16),
              
                      array("opcion"=>"Propiciar la coherencia organizativa, funcional, procedimental y sistémica de los órganos públicos","relacion"=>17),
                      array("opcion"=>"Incrementar los niveles de capacidad y conocimiento del funcionario público","relacion"=>17),
                      array("opcion"=>"Implementar la simplificación de trámites administrativos a todos los niveles","relacion"=>17),
                      array("opcion"=>"Instaurar y aplicar sistemas de evaluación de gestión de organismos y funcionarios","relacion"=>17),
                      array("opcion"=>"Promover los principios de coordinación y cooperación inter-orgánica de la administración pública a todos los niveles","relacion"=>17),

                      array("opcion"=>"Crear estímulos a los servidores públicos","relacion"=>18),
                      array("opcion"=>"Ofrecer formación para su mejoramiento","relacion"=>18),
                      array("opcion"=>"Cambiar la cultura actual del servidor público","relacion"=>18),
              
                      array("opcion"=>"Garantizar la transparencia y democratización de la información","relacion"=>19),
                      array("opcion"=>"Fortalecer y articular mecanismos internos y externos de seguimiento y control sobre la gestión pública","relacion"=>19),
                      array("opcion"=>"Promover la corresponsabilidad de todos los agentes sociales y económicos","relacion"=>19),
              
                      array("opcion"=>"Utilizar los medios de comunicación como instrumento de formación en valores ciudadanos","relacion"=>20),
                      array("opcion"=>"Educar en la utilización responsable y crítica de los medios de comunicación","relacion"=>20),
                      array("opcion"=>"Promover el control social de la población hacia los medios de comunicación masivos","relacion"=>20),
              
                      array("opcion"=>"Facilitar el acceso de la población excluida a los medios de comunicación","relacion"=>21),
                      array("opcion"=>"Estimular la participación ciudadana en la defensa de sus derechos y el cumplimiento de los deberes comunicacionales","relacion"=>21),
              
                      array("opcion"=>"Fomentar el hábito de la lectura, el uso responsable de Internet y otras formas informáticas de comunicación e información","relacion"=>22),
                      array("opcion"=>"Facilitar el acceso de las comunidades a los medios de comunicación","relacion"=>22),
                      array("opcion"=>"Facilitar condiciones tecnológicas, educativas y financieras a los nuevos emprendedores comunicacionales","relacion"=>22),
                      array("opcion"=>"Establecer como obligatorio la utilización de códigos especiales de comunicación para los discapacitados","relacion"=>22),
                      array("opcion"=>"Fortalecer los medios de comunicación e información del Estado y democratizar sus espacios de comunicación","relacion"=>22),

                      array("opcion"=>"Proyectar el patrimonio cultural, geográfico, turístico y ambiental de Venezuela","relacion"=>23),
                      array("opcion"=>"Construir redes de comunicación y medios de expresión de la palabra, la imagen y las voces de nuestros pueblos","relacion"=>23),
                      array("opcion"=>"Crear un ente internacional centrado en la organización de los medios comunitarios alternativos","relacion"=>23),

                      array("opcion"=>"Mejorar el poder adquisitivo y el nivel económico de las familias de ingresos bajos y medios","relacion"=>24),
                      array("opcion"=>"Abatir la inflación de manera consistente","relacion"=>24),
                      array("opcion"=>"Reducir el desempleo y la informalidad","relacion"=>24),
                      array("opcion"=>"Promover el ahorro interno con equidad","relacion"=>24),
              
                      array("opcion"=>"Fortalecer los mecanismos de creación y desarrollo de EPS y de redes en la Economía Social","relacion"=>25),
                      array("opcion"=>"Fortalecer la sostenibilidad de la Economía Social","relacion"=>25),
                      array("opcion"=>"Estimular diferentes formas de propiedad social","relacion"=>25),
                      array("opcion"=>"Transformar empresas del Estado en EPS","relacion"=>25),
              
                      array("opcion"=>"Aplicar estímulos financieros y fiscales diferenciados","relacion"=>26),
                      array("opcion"=>"Estimular la utilización del capital privado internamente","relacion"=>26),
                      array("opcion"=>"Concentrar esfuerzos en las cadenas productivas con ventajas comparativas","relacion"=>26),
                      array("opcion"=>"Promover el aumento de la productividad","relacion"=>26),
              

                      array("opcion"=>"Promover la estabilidad y sostenibilidad del gasto","relacion"=>27),
                      array("opcion"=>"Reordenar el sistema tributario","relacion"=>27),
                      array("opcion"=>"Aumentar la inversión en actividades estratégicas","relacion"=>27),
              
                      array("opcion"=>"Coordinar la acción del Estado para el desarrollo regional y local","relacion"=>28),
                      array("opcion"=>"Promover el desarrollo del tejido industrial","relacion"=>28),
                      array("opcion"=>"Aplicar una política comercial exterior e interior consistentes con el desarrollo endógeno","relacion"=>28),
              
                      array("opcion"=>"Focalizar la acción sectorial del Estado","relacion"=>29),
                      array("opcion"=>"Establecer espacios de concertación","relacion"=>29),

                      array("opcion"=>"Culminar el catastro de tierras","relacion"=>30),
                      array("opcion"=>"Expropiar y rescatar tierras ociosas o sin propiedad fundamentada","relacion"=>30),
                      array("opcion"=>"Incorporar tierras a la producción y orientar su usol","relacion"=>30),
                      array("opcion"=>"Aplicar el impuesto predial","relacion"=>30),

                      array("opcion"=>"Financiar en condiciones preferenciales la inversión y la producción","relacion"=>31),
                      array("opcion"=>"Promover un intercambio comercial acorde con el desarrollo agrícola endógeno","relacion"=>31),
                      array("opcion"=>"Capacitar y apoyar a los productores para la agricultura sustentable y el desarrollo endógeno","relacion"=>31),
                      array("opcion"=>"Dotar de maquinarias, insumos y servicios para la producción","relacion"=>31),
                      array("opcion"=>"Mejorar los servicios de sanidad agropecuaria y de los alimentos","relacion"=>31),
              
                      array("opcion"=>"Rescatar, ampliar y desarrollar el riego y saneamiento","relacion"=>32),
                      array("opcion"=>"Ampliar y mantener la vialidad, transporte y conservación","relacion"=>32),
                      array("opcion"=>"Consolidar la capacidad del Estado en procesamiento y servicios y transformarla en Economía Social","relacion"=>32),
                      array("opcion"=>"Desarrollar los centros poblados","relacion"=>32),
              
                      array("opcion"=>"Fomentar la investigación y desarrollo para la soberanía alimentaria","relacion"=>33),
                      array("opcion"=>"Incrementar la infraestructura tecnológica","relacion"=>33),
                      array("opcion"=>"Apoyar la pequeña y mediana industria y las cooperativas","relacion"=>33),
                      array("opcion"=>"Propiciar la diversificación productiva en la actividad manufacturera, minera y forestal","relacion"=>33),
                      array("opcion"=>"Resguardar el conocimiento colectivo de los pueblos originarios","relacion"=>33),
              
                      array("opcion"=>"Fortalecer centros de investigación y desarrollo en las regiones","relacion"=>34),
                      array("opcion"=>"Apoyar y fortalecer la prosecución de carreras científicas y posgrados, y garantizar el mejoramiento de los docentes","relacion"=>34),
                      array("opcion"=>"Apoyar la conformación de redes científicas nacionales, regionales e internacionales privilegiando las prioridades del país","relacion"=>34),
                      array("opcion"=>"Generar vínculos entre los investigadores universitarios y las unidades de investigación de las empresas productivas","relacion"=>34),
                      array("opcion"=>"Identificar los retornos de los resultados de las investigaciones, a traves de indicadores que consideren el impacto en la solución de problemas","relacion"=>34),
                      array("opcion"=>"Crear y aplicar contenidos programáticos para el uso de tecnologías de información y comunicación","relacion"=>34),

                      array("opcion"=>"Programar y aplicar incentivos hacia las propuestas innovadoras de los grupos excluidos","relacion"=>35),
                      array("opcion"=>"Crear seguridad social y estímulo para los jóvenes que se dediquen a la investigación","relacion"=>35),
                      array("opcion"=>"Crear sistemas de evaluación, certificación, promoción y divulgación de los hallazgos e innovaciones","relacion"=>35),
                      array("opcion"=>"Potenciar redes de conocimiento y de capacitación para el trabajo en todos los niveles educativos","relacion"=>35),
                      array("opcion"=>"Identificar y utilizar las fortalezas del talento humano nacional","relacion"=>35),
                      array("opcion"=>"Crear plataformas tecnológicas para el acceso del ciudadano común","relacion"=>35),

                      array("opcion"=>"Simplificar los trámites para la obtención de patentes y reducir costos","relacion"=>36),
                      array("opcion"=>"Vincular las potencialidades humanas con las necesidades nacionales y regionales","relacion"=>36),
                      array("opcion"=>"Garantizar la distribución generalizada de tecnología de la información y la comunicación en todo el territorio nacional","relacion"=>36),
                      array("opcion"=>"Divulgar y adoptar las normas de calidad internacional que permitan ofrecer propuestas competitivas","relacion"=>36),
                      array("opcion"=>"Actualizar el banco de patentes y modernizar los sistemas de información","relacion"=>36),
                      array("opcion"=>"Divulgar los resultados de los esfuerzos de innovación para lograr visibilidad, impacto y estímulo","relacion"=>36),

                      array("opcion"=>"Ampliar la accesibilidad con la fachada andina","relacion"=>37),
                      array("opcion"=>"Reforzar la accesibilidad hacia las fachadas amazónica y caribeña","relacion"=>37),
                      array("opcion"=>"Fortalecer la presencia del Estado en las Zonas de Integración Fronteriza","relacion"=>37),
              
                      array("opcion"=>"Dinamizar las regiones en base a complementariedades y articulación de espacios productivos","relacion"=>38),
                      array("opcion"=>"Desarrollar sinergias entre sistemas de producción social","relacion"=>38),
                      array("opcion"=>"Alcanzar la integración territorial de la nación mediante los corredores de infraestructuras que conformarán ejes de integracióny desarrollo","relacion"=>38),
              
                      array("opcion"=>"Conservar las cuencas hidrográficas y la biodiversidad","relacion"=>39),
                      array("opcion"=>"Formular los planes de ordenación del territorio","relacion"=>39),
                      array("opcion"=>"Disminuir la vulnerabilidad de la población tomando en cuenta las zonas de riesgo","relacion"=>39),
              
                      array("opcion"=>"Orientar y apoyar la prestación de servicios públicos con énfasis en reducción del impacto ambiental","relacion"=>40),
                      array("opcion"=>"Aplicar impuestos por mejoras y a los terrenos ociosos o subutilizados","relacion"=>40),
                      array("opcion"=>"Rehabilitar áreas centrales deterioradas","relacion"=>40),
              
                      array("opcion"=>"Alcanzar la complementaridad funcional entre ciudades intermedias en el Eje Norte Llanero","relacion"=>41),
                      array("opcion"=>"Generar una estructura urbana incluyente en los centros intermedios","relacion"=>41),
              
                      array("opcion"=>"Restringir las actividades en áreas de preservación","relacion"=>42),
                      array("opcion"=>"Reforzar las prácticas conservacionistas de los pueblos indígenas en sus territorios ancestrales","relacion"=>42),
                      array("opcion"=>"Manejar adecuadamente las Áreas Bajo Régimen de Administración Especial y demás áreas protegidas","relacion"=>42),
                      array("opcion"=>"Recuperar y mejorar los principales lagos y sus afluentes","relacion"=>42),
                      array("opcion"=>"Intervenir lo rural amigable con el ambiente","relacion"=>42),

                      array("opcion"=>"Promover la ciudad compacta con alta densidad y baja altura","relacion"=>43),
                      array("opcion"=>"Incrementar el uso de sistemas de transporte eficientes en energía y tiempo","relacion"=>43),
                      array("opcion"=>"Promover una ciudad energéticamente eficiente","relacion"=>43),
                      array("opcion"=>"Incorporar tecnologías de construcción compatibles con el ambiente","relacion"=>43),

                      array("opcion"=>"Promover la incorporación de energías alternativas basadas en recursos renovables","relacion"=>44),
                      array("opcion"=>"Incidir en el cambio del patrón productivo hacia tecnologías verdes","relacion"=>44),
                      array("opcion"=>"Promover patrones sostenibles de consumo","relacion"=>44),
                      array("opcion"=>"Reinvertir los beneficios de la explotación de recursos no renovables en el incremento de la inversión en investigación y desarrollo","relacion"=>44),
              
                      array("opcion"=>"Potenciar e incrementar la capacidad de producción de los hidrocarburos","relacion"=>45),
                      array("opcion"=>"Aumentar la capacidad de refinación de los petróleos no convencionales","relacion"=>45),
                      array("opcion"=>"Desarrollar la industria del gas natural libre","relacion"=>45),
                      array("opcion"=>"Asegurar la soberanía en el negocio de los hidrocarburos","relacion"=>45),
                      array("opcion"=>"Consolidar la red interna de producción de hidrocarburos y sus derivados","relacion"=>45),
                      array("opcion"=>"Fomentar el desarrollo de Empresas de Producción Social (EPS) relacionadas productivamente con la industria de los hidrocarburos","relacion"=>45),
              
                      array("opcion"=>"Ampliar y mejorar la red de transmisión y distribución de la electricidad","relacion"=>46),
                      array("opcion"=>"Completar el desarrollo del potencial hidroeléctrico del país","relacion"=>46),
                      array("opcion"=>"Sanear las empresas públicas del sector eléctrico y mejorar la eficiencia y la calidad de su servicio","relacion"=>46),
              
                      array("opcion"=>"Incentivar la generación de fuentes alternas de energía","relacion"=>47),
                      array("opcion"=>"Incrementar la generación de electricidad con energía no convencional y combustibles no hidrocarburos","relacion"=>47),
                      array("opcion"=>"Aplicar fuentes alternas como complemento a las redes principales y en la electrificación de zonas aisladas","relacion"=>47),
              
                      array("opcion"=>"Introducir la tecnología que permita la mayor producción de electricidad por unidad de energía primaria utilizada","relacion"=>48),
                      array("opcion"=>"Mejorar el uso de la red de distribución y comercialización de la energía","relacion"=>48),
                      array("opcion"=>"Establecer precios relativos de las diferentes formas de energía considerando su costo de oportunidad","relacion"=>48),
                      array("opcion"=>"Racionalizar el consumo de energía","relacion"=>48),
              
                      array("opcion"=>"Perfeccionar las alianzas estratégicas","relacion"=>49),
                      array("opcion"=>"Mejorar de los procesos administrativos internos de la industria","relacion"=>49),
                      array("opcion"=>"Fortalecer la contribución fiscal en la industria de los hidrocarburos","relacion"=>49),
              
                      array("opcion"=>"Desarrollar proyectos petroleros, gasíferos y petroquímicos ambientalmente sustentables","relacion"=>50),
                      array("opcion"=>"Preservar y fortalecer las actividades productivas tradicionales y endógenas","relacion"=>50),
                      array("opcion"=>"Mejorar de las condiciones de vida de los centros poblados adyacentes a las actividades del sector","relacion"=>50),
                      array("opcion"=>"Utilizar racionalmente los recursos en función del desarrollo urbano-regional desconcentrado","relacion"=>50),
              
              
                      array("opcion"=>"Desarrollar las alianzas energéticas en el contexto de la integración regional: Petrosur y Petrocaribe","relacion"=>51),
                      array("opcion"=>"Desarrollar y consolidar regionalmente los procesos asociados al desarrollo endógeno del sector","relacion"=>51),
                      array("opcion"=>"Consolidar las alianzas con Estados de las áreas de interés estratégico","relacion"=>51),

                      array("opcion"=>"Apoyar proyectos de investigación en los centros de estudios a nivel nacional así como la investigación dentro de la propia industria","relacion"=>52),
                      array("opcion"=>"Apoyar la investigación para mejorar la producción y distribución de hidrocarburos","relacion"=>52),
                      array("opcion"=>"Apoyar la investigación para el desarrollo de insumos de la industria petrolera y para el mejoramiento de sus productos","relacion"=>52),
              
                      array("opcion"=>"Avanzar en una acción decidida por la transformación de la ONU, junto con diversos movimientos internacionales que propugnenesta iniciativa","relacion"=>53),
                      array("opcion"=>"Formar el recurso humano necesario para la atención de las áreas de interés geoestratégicas","relacion"=>53),
              
                      array("opcion"=>"Sentar las bases de la autonomía financiera regional a través de la creación del sistema financiero del Sur","relacion"=>54),
                      array("opcion"=>"Promover la formación de un fondo social orientado a financiar los planes de lucha contra la pobreza y exclusión social, en el ámbito regional y mundial","relacion"=>54),
                      array("opcion"=>"Impulsar nuevos esquemas de cooperación económica y financiera para el apalancamiento del desarrollo integral y el establecimiento del comercio justo","relacion"=>54),
                      array("opcion"=>"Transformar el ahorro de la región en inversión productiva","relacion"=>54),

                      array("opcion"=>"Establecer redes de comunicación alternativas con movimientos sociales de apoyo al comercio justo y la solidaridad de los pueblos","relacion"=>55),
                      array("opcion"=>"Fortalecer relaciones e intercambio Sur-Sur","relacion"=>55),

                      array("opcion"=>"Estimular relaciones económicas autodeterminadas","relacion"=>56),
                      array("opcion"=>"Promover internacionalmente la protección de los derechos humanos y el ambiente","relacion"=>56),

                      array("opcion"=>"Conformar alianzas con países que comparten reservas acuíferas y energéticas con Venezuela","relacion"=>57),
                      array("opcion"=>"Promover la integración militar suramericana","relacion"=>57),
                      array("opcion"=>"Impulsar selectivamente la Alternativa Bolivariana para América como alternativa al Área de Libre Comercio de las Américas","relacion"=>57),
                      array("opcion"=>"Favorecer alianzas para el crecimiento económico y social equilibrados","relacion"=>57),
                      array("opcion"=>"Operativizar el principio de solidaridad usando recursos y asistencia para enfrentar desastres naturales y pandemias","relacion"=>57),
                      array("opcion"=>"Participar en la construcción del nuevo MERCOSUR hacia la conformación de la CSAN sobre la base de la reorientación de los contenidos de la integración","relacion"=>57),

              );
          
          $this->db->insert_batch('polidos', $politica);
          $result.=$this->db->last_query()."\n";
           
           
        return $result;
    }
    
}//fin class
?>