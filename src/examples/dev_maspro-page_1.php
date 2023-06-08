<?php

$dev_maspro_page_1 = "<header>CSS GRID</header>" . 
                     Maspro::cr(
                        "section class='container'",#contenedor puede ser cualquier tag
                        "div style='".Maspro::ht()."'",/*etiquetas hijo puede ser cualquier 
                        tag y estilo de los hijos del contenedor*/
                        "style='".Maspro::cs()."'",#estilo del contenedor
                        15//cantidad de hijos
                     ) .
                     "<footer>
                        <header>&copy; maspro & dev_maspro - Ramiro G.</header>
                     </footer>"/*.
                      AREAS 
                      * Es necesario programar una 
                      * forma para poder hacer loop
                      * a travez de javascript 
                      * con Maspro. 
                      
                      */
                     /* Maspro::wj(
                        Maspro::ge('div',0,0,1).";".
                        Maspro::sa("'class'","'item'","elementByTagName[0]").";".
                        Maspro::sa("'class'","'sidebar1'","elementByTagName[1]").";".
                        Maspro::sa("'class'","'content'","elementByTagName[2]").";".
                        Maspro::sa("'class'","'widget'","elementByTagName[3]").";".
                        Maspro::sa("'class'","'item'","elementByTagName[4]").";".
                        Maspro::sa("'class'","'footer'","elementByTagName[5]")
                     )*/;
#dev_maspro_page_1--