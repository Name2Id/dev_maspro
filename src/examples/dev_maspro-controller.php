<?= 
    Maspro::dm(
        $dev_maspro_page_1,
        "CSS Grid",
        #$$$$$$$$$$$$$$$$$$$$$$$$EXAMPLES
            /**
             * 0 = para utilizar gap , columns , areas
             * 1 = columns
             * 2 = columns & rows
             * 3 = gap , columns , rows
             * > 3 = columns gap
             * order of the args from left to right
             * 1-switch 2-cols 3-rows|areas 4-gap
             */
            #".container {".Maspro::gd(
            #    3,//mode
            #    "repeat(auto-fill,minmax(100px,1fr))",
                /**
                 * PARA TRABAJAR CON AREAS 
                 * SE UTILIZAN DOBLES Y SIMPLES
                 * COMILLAS EN CONJUNTO ASI :
                 * siguiendo con el uso de 
                 * la concatenacion =)
                 */
                /*AREAS "'header    header  header'".
                "'sidebar1  content sidebar2'".
                "'sidebar1  widget  sidebar2'".
                "'footer    footer  footer'",
                "20px"*/
                //rows
            #    "200px 100px 200px",
            #    "20px"
                //justify-items & align-items
                #values: | auto | start | center | end | stretch |
            #)."}"/*.Maspro::hv(3,"container","100px","100px",'column')
            #    ."div {background-color: #345678;}"
            /*AREAS .Maspro::as(0,"item","header","header")
            .Maspro::gcgr("sidebar1","sidebar1")
            .Maspro::gcgr("content","content")
            .Maspro::gcgr("widget","widget")
            .Maspro::gcgr("sidebar2","sidebar2")
            .Maspro::gcgr("footer","footer")
            */
            /**
             * Para todo el posicionamiento 
             * del elemento hijo =)
             */
            /*Maspro::gcgr("container .item","span 3","3 / span2") |OR|
            * error : span2 
            * correct : span 2
            */
            // Maspro::se('container .item',"span 3","",3,"span 2")
        #$$$$$$$$$$$$$$$$$$$$$$$$EXAMPLES
    );
?>