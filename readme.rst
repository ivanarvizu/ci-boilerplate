###################
Instalación
###################

Requisitos previos: Instalar Composer (https://getcomposer.org/)

1. Clonar repositorio o descargar.

2. Abrir una terminal de comandos e introducir: `composer install`

3. Configurar en `application/config/database` los parámetros de base de datos.

4. Crear tabla de base de datos `ci_sessions`. Para esto, se incluye el archivo `ci_sessions.sql` en la raíz del proyecto.

5. Se recomienda ampliamente configuar un dominio virtual de Apache.


###################
Changelog
###################

2017-11-12: Se añadió una validación cuando la variable `SERVER_NAME` no está definida y se le agregó un modelo Eloquent
de ejemplo. Además se actualizó Codeigniter a 3.1.6

2017-11-11: Se agregó un cliente de línea de comandos basado en Pitisan (https://github.com/piece601/Codeigniter-Pitisan)


INFORMACIÓN ORIGINAL

###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <https://webchat.freenode.net/?channels=%23codeigniter>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
