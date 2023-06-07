<?php

$dev_maspro_page_1 = "<header>CSS GRID</header>" . 
                     Maspro::cr(
                        "section class='container'",#contenedor puede ser cualquier tag
                        "div style='".Maspro::ht()."'",/*etiquetas hijo puede ser cualquier 
                        tag y estilo de los hijos del contenedor*/
                        "style='".Maspro::cs()."'",#estilo del contenedor
                        12//cantidad de hijos
                     ) .
                     "<footer>
                        <header>&copy; maspro & dev_maspro - Ramiro G.</header>
                     </footer>";
#dev_maspro_page_1--