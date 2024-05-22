<?php

namespace App\Http\Controllers;

    
class EspeciesController extends Controller
{
    public function lobo_iberico()
    {
        $titulo = 'LOBO IBÉRICO';
        $texto = 'El lobo ibérico (Canis lupus signatus) es una subespecie de lobo que habita en la península ibérica. Se caracteriza por su tamaño medio, su pelaje rojizo y una marca distintiva en sus patas delanteras. Es un depredador tope y juega un papel crucial en el equilibrio de los ecosistemas donde vive. La estructura social de los lobos ibéricos es compleja, con manadas jerárquicas que facilitan la caza y la crianza de los cachorros. Su presencia indica un ecosistema saludable, ya que ayuda a controlar las poblaciones de herbívoros y otras especies de presa.';
        $imagen = '../../assets/images/nutria.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS LOBOS IBÉRICOS';
        $segundoTexto = 'El lobo ibérico es una subespecie de lobo que habita en la península ibérica. Estos lobos son más pequeños que sus parientes del norte y tienen un pelaje más rojizo. Su dieta incluye ciervos, jabalíes y otros ungulados, pero también pueden alimentarse de pequeños mamíferos y aves. Son animales sociales que viven en manadas estructuradas jerárquicamente. Cada manada está formada por una pareja reproductora y sus crías de diferentes años. Los lobos ibéricos son conocidos por su aullido, que utilizan para comunicarse con otros miembros de su manada y para marcar su territorio.';
        $amenzas = 'Las principales amenazas para el lobo ibérico son la caza furtiva, la destrucción de su hábitat y la falta de alimento. Aunque está protegido por la ley en varios países, la persecución ilegal continúa debido a conflictos con la ganadería. La fragmentación del hábitat debido a la expansión urbana y agrícola también reduce sus áreas de caza y refugio. Además, la disminución de sus presas naturales obliga a los lobos a acercarse a áreas habitadas por humanos, aumentando los conflictos.';
        $solucion = 'Para proteger al lobo ibérico es necesario concienciar a la población sobre la importancia de su conservación y establecer medidas de protección para su hábitat. Programas de compensación para los ganaderos afectados por ataques de lobos pueden ayudar a reducir los conflictos. La creación de corredores ecológicos que conecten áreas fragmentadas puede mejorar el acceso a recursos y hábitats adecuados. Además, la promoción del turismo de naturaleza puede generar ingresos que beneficien tanto a las comunidades locales como a la conservación del lobo ibérico.';

        return view('front-client.trabajo.animales.lobo', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function lince_iberico()
    {
        $titulo = 'LINCE IBÉRICO';
        $texto = 'El lince ibérico (Lynx pardinus) es uno de los felinos más amenazados del mundo, endémico de la península ibérica. Este majestuoso animal se distingue por su pelaje moteado, sus orejas con pinceles negros y una cola corta con una punta negra. Los linces ibéricos son solitarios y territoriales, y su dieta se compone principalmente de conejos, aunque también cazan aves y otros pequeños mamíferos.';
        $imagen = '../../assets/images/lince.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS LINCES IBÉRICOS';
        $segundoTexto = 'El lince ibérico es una de las especies de felinos más amenazadas del mundo. Su pelaje moteado y las largas patillas negras son características distintivas. Estos animales prefieren los bosques mediterráneos densos y los matorrales donde pueden encontrar suficiente cobertura y presas. Su dieta se compone principalmente de conejos, que representan aproximadamente el 80-90% de su alimentación. La reproducción de los linces es estacional, con crías naciendo generalmente en primavera.';
        $amenzas = 'Las principales amenazas son la pérdida de hábitat, la disminución de sus presas y los atropellos en carreteras. La urbanización y la expansión agrícola han reducido significativamente el hábitat disponible para el lince. Las enfermedades que afectan a las poblaciones de conejos, su principal presa, también han tenido un impacto devastador. Además, los linces son frecuentemente víctimas de atropellos debido a la fragmentación de su hábitat por carreteras y otras infraestructuras.';
        $solucion = 'Para proteger al lince ibérico se han creado reservas y se está trabajando en la restauración de su hábitat y la reintroducción de conejos. Programas de cría en cautividad y reintroducción han tenido éxito en aumentar las poblaciones de linces. Es esencial continuar con la creación de corredores ecológicos que conecten hábitats fragmentados y reducir la mortalidad en carreteras mediante la construcción de pasos de fauna. La educación y la concienciación pública también son claves para el éxito de los esfuerzos de conservación.';

        return view('front-client.trabajo.animales.lince', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function vison_europeo()
    {
        $titulo = 'VISÓN EUROPEO';
        $texto = 'El visón europeo (Mustela lutreola) es un pequeño carnívoro en peligro de extinción que habita en los ríos y humedales de Europa. Su pelaje es marrón oscuro, casi negro, y se distingue por una mancha blanca en el labio superior. Este animal es un excelente nadador y depende de ríos limpios y bien conservados para sobrevivir.';
        $imagen = '../../assets/images/vison.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS VISONES EUROPEOS';
        $segundoTexto = 'El visón europeo es un pequeño carnívoro que habita en ríos y humedales de Europa. Su pelaje es marrón oscuro, casi negro, y se distingue por una mancha blanca en el labio superior. Son animales solitarios y territoriales, que se desplazan principalmente por el agua en busca de presas como peces, ranas y crustáceos. Su presencia en un ecosistema es un buen indicador de la salud ambiental, ya que requieren aguas limpias y abundancia de alimento.';
        $amenzas = 'Las amenazas incluyen la competencia con el visón americano, la pérdida de hábitat y la contaminación de los ríos. El visón americano, introducido en Europa para la industria peletera, compite directamente con el visón europeo, desplazándolo de sus hábitats naturales. Además, la contaminación de los ríos y la destrucción de humedales han reducido significativamente las áreas adecuadas para su supervivencia. La caza y las trampas también representan una amenaza constante.';
        $solucion = 'Proteger al visón europeo implica la restauración de sus hábitats y la erradicación de las especies invasoras. Es crucial implementar programas de conservación que incluyan la protección de ríos y humedales, así como la eliminación del visón americano en áreas clave. La concienciación pública y la educación sobre la importancia de los visones europeos también juegan un papel importante en su conservación.';

        return view('front-client.trabajo.animales.vison', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function rapaces()
    {
        $titulo = 'RAPACES';
        $texto = 'Las rapaces incluyen una variedad de aves de presa como águilas, halcones, búhos y buitres. Estas aves son conocidas por su aguda visión, garras afiladas y picos curvados, adaptados para cazar y desgarrar a sus presas. Juegan un papel crucial en los ecosistemas, controlando las poblaciones de roedores y otros pequeños animales.';
        $imagen = '../../../assets/images/rapaces.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LAS RAPACES';
        $segundoTexto = 'Las rapaces incluyen una variedad de aves de presa como águilas, halcones, búhos y buitres. Estas aves son conocidas por su aguda visión, garras afiladas y picos curvados, adaptados para cazar y desgarrar a sus presas. Tienen una excelente visión, con algunos búhos capaces de ver en la oscuridad total. Las rapaces juegan un papel crucial en los ecosistemas, controlando las poblaciones de roedores y otros pequeños animales. Sus hábitos de caza y comportamiento varían ampliamente entre las diferentes especies, desde el majestuoso vuelo del águila hasta el sigiloso acecho del búho.';
        $amenzas = 'Las amenazas principales son la caza ilegal, los pesticidas y la destrucción de hábitats. Muchas rapaces han sufrido debido al uso de pesticidas como el DDT, que debilitaba sus cáscaras de huevo. La caza ilegal para colecciones y trofeos también ha diezmado poblaciones. Además, la urbanización y la deforestación han destruido muchos de sus hábitats naturales, reduciendo las áreas disponibles para cazar y anidar.';
        $solucion = 'Para proteger a las rapaces se están creando programas de cría en cautividad y educación sobre la importancia de estas aves. La prohibición de pesticidas dañinos y la restauración de hábitats naturales son esenciales. También es importante implementar leyes más estrictas contra la caza ilegal y promover el ecoturismo como una forma de generar ingresos que beneficien a la conservación de estas especies.';

        return view('front-client.trabajo.animales.rapaces', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function conejo()
    {
        $titulo = 'CONEJO';
        $texto = 'El conejo (Oryctolagus cuniculus) es un mamífero pequeño y herbívoro que se encuentra en diversas regiones del mundo. Son conocidos por su alta tasa de reproducción y su capacidad para excavar madrigueras complejas. Los conejos juegan un papel crucial en muchos ecosistemas como presa para numerosos depredadores.';
        $imagen = '../../assets/images/conejo.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS CONEJOS';
        $segundoTexto = 'El conejo es una especie clave en muchos ecosistemas debido a su alta tasa de reproducción y su papel como presa para numerosos depredadores. Los conejos son conocidos por sus largos oídos, cola esponjosa y grandes ojos, que les proporcionan un amplio campo de visión para detectar amenazas. Viven en madrigueras que excavan en el suelo y se alimentan de una variedad de vegetación, lo que los convierte en herbívoros esenciales en la cadena alimentaria. Su comportamiento social es complejo, con estructuras jerárquicas en las colonias.';
        $amenzas = 'Las enfermedades como la mixomatosis y la fiebre hemorrágica viral son sus principales amenazas. Estas enfermedades han diezmado poblaciones enteras en muy poco tiempo. Además, la pérdida de hábitat debido a la agricultura intensiva y la urbanización también representa una amenaza significativa. La caza y los depredadores introducidos, como los gatos y los zorros, también han afectado a las poblaciones de conejos.';
        $solucion = 'La solución incluye la vacunación y la mejora de las condiciones de su hábitat. Programas de conservación que incluyen la reintroducción de conejos en áreas protegidas han sido exitosos en algunas regiones. La restauración de hábitats naturales y la creación de corredores ecológicos también son cruciales para asegurar la supervivencia a largo plazo de las poblaciones de conejos.';

        return view('front-client.trabajo.animales.conejo', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function elefante()
    {
        $titulo = 'ELEFANTE';
        $texto = 'El elefante es el mamífero terrestre más grande del planeta. Existen tres especies: el elefante africano de sabana, el elefante africano de bosque y el elefante asiático. Los elefantes son conocidos por su inteligencia, memoria y complejas estructuras sociales. Utilizan sus trompas para una variedad de funciones, desde alimentarse hasta comunicarse.';
        $imagen = '../../assets/images/elefante.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS ELEFANTES';
        $segundoTexto = 'Los elefantes son los mamíferos terrestres más grandes del planeta. Son animales altamente inteligentes y sociales, viviendo en manadas lideradas por una matriarca. Los elefantes utilizan sus trompas para una variedad de funciones, incluyendo la recolección de alimentos, beber agua y como una herramienta de comunicación. Su dieta se compone de una gran cantidad de vegetación, incluyendo hojas, cortezas y frutas. Tienen una piel gruesa que los protege de las inclemencias del tiempo y de los depredadores. La memoria de los elefantes es legendaria, y se sabe que pueden recordar lugares y rutas de agua durante muchos años.';
        $amenzas = 'La caza furtiva por su marfil y la pérdida de hábitat son sus mayores amenazas. Los elefantes han sido cazados durante siglos por sus colmillos, que se venden en el mercado negro. Además, la expansión humana ha reducido significativamente sus hábitats naturales, lo que lleva a conflictos entre humanos y elefantes. La deforestación y la conversión de tierras para la agricultura han fragmentado sus territorios, dificultando su acceso a recursos esenciales.';
        $solucion = 'La protección de los elefantes incluye la lucha contra la caza furtiva y la preservación de sus hábitats naturales. Es crucial implementar leyes más estrictas y mejorar la vigilancia para prevenir la caza ilegal. La creación de corredores de vida silvestre y áreas protegidas puede ayudar a asegurar que los elefantes tengan suficiente espacio para vivir y moverse. Programas de concienciación y educación también son vitales para reducir los conflictos entre humanos y elefantes y promover la coexistencia pacífica.';

        return view('front-client.trabajo.animales.elefante', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function oso_polar()
    {
        $titulo = 'OSO POLAR';
        $texto = 'El oso polar (Ursus maritimus) es uno de los depredadores más grandes de la Tierra, adaptado para vivir en el frío extremo del Ártico. Su grueso pelaje blanco y su capa de grasa lo aíslan del frío, y sus poderosas patas le permiten nadar largas distancias en busca de focas, su principal presa.';
        $imagen = '../../assets/images/oso_polar.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS OSOS POLARES';
        $segundoTexto = 'El oso polar es un gran depredador del Ártico, especializado en la caza de focas. Tienen un olfato extremadamente desarrollado que les permite detectar presas a kilómetros de distancia. Los osos polares son nadadores excepcionales y pueden nadar largas distancias entre bloques de hielo. Su grueso pelaje blanco y una capa subcutánea de grasa les proporcionan un excelente aislamiento térmico. Además, los osos polares tienen una dieta rica en grasas que les proporciona la energía necesaria para sobrevivir en su hábitat extremo.';
        $amenzas = 'El cambio climático que reduce el hielo marino es la mayor amenaza para los osos polares. A medida que el hielo se derrite, los osos polares tienen que nadar distancias más largas para encontrar alimento, lo que aumenta su riesgo de agotamiento y muerte. Además, la disminución del hielo marino reduce las áreas disponibles para la caza de focas. La contaminación y el desarrollo industrial en el Ártico también representan amenazas significativas.';
        $solucion = 'La lucha contra el cambio climático y la conservación del hábitat son esenciales para proteger a los osos polares. Es crucial reducir las emisiones de gases de efecto invernadero a nivel global para frenar el derretimiento del hielo ártico. La creación de áreas protegidas en el Ártico y la regulación estricta de las actividades industriales pueden ayudar a preservar los hábitats naturales de los osos polares. La investigación y el monitoreo continuos son necesarios para entender mejor las necesidades de los osos polares y desarrollar estrategias efectivas de conservación.';

        return view('front-client.trabajo.animales.oso', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function ballena()
    {
        $titulo = 'BALLENA';
        $texto = 'Las ballenas son mamíferos marinos que pertenecen al orden de los cetáceos. Existen diversas especies, incluyendo la ballena azul, el animal más grande del planeta. Las ballenas son conocidas por su inteligencia, sus complejas vocalizaciones y sus largos viajes migratorios.';
        $imagen = '../../assets/images/ballena.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LAS BALLENAS';
        $segundoTexto = 'Las ballenas son mamíferos marinos que pertenecen al orden de los cetáceos. Algunas de las especies más conocidas incluyen la ballena azul, la ballena jorobada y la ballena franca. Las ballenas se comunican mediante vocalizaciones complejas, y algunas especies, como las ballenas jorobadas, son famosas por sus canciones. Las ballenas realizan largos viajes migratorios entre las zonas de alimentación y las zonas de cría. Son animales sociales que a menudo se ven en grupos conocidos como vainas. Las ballenas tienen una capa gruesa de grasa que les proporciona aislamiento térmico y una reserva de energía.';
        $amenzas = 'Las principales amenazas para las ballenas incluyen la caza comercial, la contaminación marina, el cambio climático y las colisiones con barcos. A pesar de las prohibiciones internacionales, la caza ilegal de ballenas continúa siendo una amenaza en algunas regiones. Además, la contaminación marina, incluyendo los derrames de petróleo y la acumulación de plásticos, puede afectar gravemente su salud y hábitat. El cambio climático también representa un peligro, ya que altera los ecosistemas marinos y afecta la disponibilidad de alimentos para las ballenas. Las colisiones con barcos son otra preocupación importante, especialmente en áreas de alta actividad naval.';
        $solucion = 'Para proteger a las ballenas, es fundamental continuar con los esfuerzos de conservación y gestión sostenible de los océanos. Esto incluye la implementación y cumplimiento de regulaciones internacionales contra la caza ilegal y la contaminación marina. La creación de áreas marinas protegidas y la reducción de la interferencia humana en sus rutas migratorias también son medidas clave. Además, se deben desarrollar tecnologías para reducir las colisiones con embarcaciones y mejorar la respuesta ante derrames de petróleo y otros desastres ambientales.';
        return view('front-client.trabajo.animales.ballena', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function rinoceronte()
    {
        $titulo = 'RINOCERONTE';
        $texto = 'El rinoceronte es un mamífero herbívoro de gran tamaño conocido por su piel gruesa y sus impresionantes cuernos. Existen cinco especies de rinocerontes en el mundo, todas ellas en peligro debido a la caza furtiva y la pérdida de hábitat.';
        $imagen = '../../assets/images/rinoceronte.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS RINOCERONTES';
        $segundoTexto = 'Los rinocerontes son mamíferos herbívoros que se encuentran en África y Asia. Tienen una piel gruesa y arrugada y, en algunas especies, uno o dos cuernos distintivos en la nariz. Estos cuernos están hechos de queratina, la misma sustancia que forma nuestras uñas y cabello. Los rinocerontes son animales solitarios y territoriales, que se alimentan principalmente de vegetación como hierbas, ramas y hojas. Son criaturas majestuosas pero vulnerables, con poblaciones en declive debido a la caza furtiva y la degradación de su hábitat.';
        $amenzas = 'La caza furtiva para el comercio ilegal de cuernos de rinoceronte es la principal amenaza para estas especies. A pesar de las prohibiciones internacionales, la demanda de cuernos de rinoceronte en algunos mercados asiáticos sigue siendo alta, lo que alimenta la caza ilegal. Además, la pérdida y degradación de hábitats naturales debido a la expansión agrícola y urbana también representan una amenaza significativa para los rinocerontes.';
        $solucion = 'La protección efectiva de los rinocerontes requiere una acción coordinada a nivel local, nacional e internacional. Esto incluye medidas para combatir la caza furtiva, como el aumento de la vigilancia y las patrullas anti-caza furtiva, así como la imposición de leyes más estrictas y penalizaciones más severas para los traficantes de cuernos de rinoceronte. La conservación de hábitats naturales y la creación de corredores ecológicos también son cruciales para asegurar la supervivencia a largo plazo de estas especies.';

        return view('front-client.trabajo.animales.rinoceronte', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function leopardo_de_las_nieves()
    {
        $titulo = 'LEOPARDO DE LAS NIEVES';
        $texto = 'El leopardo de las nieves (Panthera uncia) es una de las especies de felinos más hermosas y misteriosas del mundo. Habita en las montañas de Asia Central, adaptado a la vida en terrenos rocosos y nevados. Su pelaje grueso y moteado le proporciona camuflaje en su entorno alpino.';
        $imagen = '../../assets/images/leopardo.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS LEOPARDOS DE LAS NIEVES';
        $segundoTexto = 'El leopardo de las nieves es una de las especies de felinos más elusivas y adaptadas a la vida en alta montaña. Su pelaje espeso y moteado le proporciona camuflaje en su hábitat alpino, mientras que sus largas colas les ayudan a mantener el equilibrio en terrenos rocosos. Estos felinos son solitarios y crepusculares, cazando principalmente ungulados como el íbice y el bharal, así como pequeños mamíferos y aves. Su territorio puede abarcar grandes áreas, y se comunican entre sí mediante marcas olfativas y vocalizaciones.';
        $amenzas = 'La caza furtiva, la pérdida de hábitat y el cambio climático son las principales amenazas para el leopardo de las nieves. La demanda de pieles y partes del cuerpo en el mercado negro impulsa la caza ilegal, mientras que la expansión humana y la construcción de infraestructuras fragmentan su hábitat y reducen sus presas naturales. El cambio climático está afectando a los ecosistemas de alta montaña, alterando los patrones de presas y la disponibilidad de hábitat.';
        $solucion = 'La conservación del leopardo de las nieves requiere una combinación de medidas, incluyendo la protección legal, la gestión de hábitats y la educación ambiental. Esto incluye el establecimiento y la ampliación de áreas protegidas en su rango de distribución, así como la aplicación de leyes contra la caza furtiva y el comercio ilegal de especies. La promoción de prácticas sostenibles de pastoreo y desarrollo económico para las comunidades locales también puede reducir la presión sobre los hábitats del leopardo de las nieves.';
        return view('front-client.trabajo.animales.leopardo', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function tortugas()
    {
        $titulo = 'TORTUGAS MARINAS';
        $texto = 'Las tortugas marinas son reptiles marinos que han existido durante millones de años, pero actualmente enfrentan numerosas amenazas que ponen en peligro su supervivencia. Estas fascinantes criaturas migran a lo largo de vastos océanos, anidando en playas remotas y alimentándose en arrecifes de coral y pastizales marinos.';
        $imagen = '../../assets/images/tortuga.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LAS TORTUGAS MARINAS';
        $segundoTexto = 'Las tortugas marinas son reptiles adaptados para la vida en el océano. Tienen aletas en forma de remo que les permiten nadar largas distancias y respiran aire a través de pulmones. Las tortugas marinas tienen una dieta variada que incluye algas, medusas, crustáceos y otros invertebrados marinos. Son animales migratorios que viajan miles de kilómetros entre sus áreas de alimentación y las playas donde anidan. Algunas especies, como la tortuga laúd, son las más grandes de todas las tortugas, alcanzando tamaños impresionantes.';
        $amenzas = 'Las tortugas marinas enfrentan múltiples amenazas, incluyendo la pesca incidental, la contaminación marina, la destrucción de hábitats costeros y el cambio climático. La captura accidental en redes de pesca es una de las principales causas de muerte para muchas especies de tortugas marinas. La contaminación por plásticos y productos químicos afecta su salud y puede causar obstrucciones intestinales mortales. La pérdida de playas debido a la urbanización y el desarrollo turístico también reduce los lugares de anidación disponibles.';
        $solucion = 'La conservación de las tortugas marinas requiere medidas a nivel local y global. Esto incluye la protección de playas de anidación, la implementación de dispositivos de exclusión de tortugas en las redes de pesca y la reducción del uso de plásticos de un solo uso. Además, es crucial abordar el cambio climático y proteger los arrecifes de coral y pastizales marinos, que son hábitats vitales para las tortugas marinas. La educación pública y la participación comunitaria también son importantes para promover prácticas de pesca sostenibles y reducir la contaminación marina.';

        return view('front-client.trabajo.animales.tortugas', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }

    public function chimpance()
    {
        $titulo = 'CHIMPANCÉ';
        $texto = 'El chimpancé (Pan troglodytes) es uno de los parientes vivos más cercanos al ser humano, compartiendo aproximadamente el 98% de su ADN. Estos inteligentes primates viven en grupos sociales complejos en las selvas de África Central y Occidental, donde utilizan herramientas, cazan y se comunican a través de vocalizaciones y gestos.';
        $imagen = '../../assets/images/chimpance.png';
        $segundoTitulo = 'CARACTERÍSTICAS Y CURIOSIDADES SOBRE LOS CHIMPANCÉS';
        $segundoTexto = 'Los chimpancés son primates altamente inteligentes y sociables que viven en grupos llamados comunidades. Son omnívoros y se alimentan de frutas, hojas, insectos y, en ocasiones, carne. Los chimpancés son conocidos por su capacidad para utilizar herramientas, como ramas para pescar termitas o piedras para abrir nueces. También tienen complejos sistemas de comunicación que incluyen vocalizaciones, gestos y expresiones faciales. Los lazos sociales entre los chimpancés son fuertes, con comportamientos como el cuidado de los más jóvenes y la formación de alianzas entre individuos.';
        $amenzas = 'La caza furtiva, la degradación del hábitat y el comercio ilegal de crías son algunas de las amenazas que enfrentan los chimpancés. La caza furtiva para obtener carne de chimpancé y el comercio ilegal de crías para mascotas o entretenimiento son prácticas devastadoras que disminuyen las poblaciones de chimpancés en la naturaleza. Además, la deforestación y la fragmentación del hábitat reducen las áreas disponibles para estos primates, lo que dificulta su supervivencia y desplazamiento. Además, los chimpancés también enfrentan riesgos de enfermedades transmitidas por humanos, como el virus del Ébola.';
        $solucion = 'La conservación de los chimpancés requiere esfuerzos integrales que aborden tanto las amenazas directas como los factores subyacentes. Esto incluye la protección legal de los chimpancés y sus hábitats, así como el combate a la caza furtiva y el comercio ilegal. La educación y el desarrollo sostenible son cruciales para involucrar a las comunidades locales en la conservación y brindar alternativas económicas a la explotación de recursos naturales. Además, es importante abordar la salud de los chimpancés y mitigar los riesgos de enfermedades mediante la investigación y la implementación de medidas preventivas.';
        return view('front-client.trabajo.animales.chimpace', compact('titulo', 'texto', 'imagen', 'segundoTitulo', 'segundoTexto', 'amenzas', 'solucion'));
    }
}
