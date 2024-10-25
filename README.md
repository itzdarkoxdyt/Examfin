<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Lo primero que haremos sera utilizar el login o register que aparece en la pagina, en caso de no estar registrados register y en caso de estarlos login

si usted ya esta registrado y se sale sin cerrar sesion la pagina cuando vuelva a cambiar el servidor es muy probable que lo deje en esta direccion http://127.0.0.1:8000/dashboard

y no le salgan opciones, en ese caso es por que el usuario ya se encuentra logeado asi que para salir de ahi por favor utilice http://127.0.0.1:8000/eventos o http://127.0.0.1:8000/home

para ingresar al menu.


Ahora los crud funcionan de tal manera que en el apartado de eventos puedas poner el nombre y que evento se trata e incluso fecha 

NOTA:  El tipo de dato de la fecha es date esto quiere decir que para EVITARNOS UN ERROR DEBEMOS DE PONER ESTE FORMATO DE FECHA

2024-10-25 o YYYY-MM-DD ya que si no el sistema nos lanzara el error al igual que al crear una conexion en el apartado participaciones, ya que esta tabla estara relacionada
tanto con eventos como con organizadores por lo que se puede enlazar los ID SOLO Y UNICAMENTE SI EXISTEN, si no exissten ocurrira un error por lo que si se escoje el  id 21 debe
de haber 21 eventos o 21 organizadores siendo este el mismo organizador o otro al igual que el evento, pueden variar si les queremos asignar esos id desde las respectivas tablas, por ultimo
con show podemos visualizar los datos y con edit modificarlos, con create crearlos y con delete podremos totalmente borrarlos si es necesario.
