REM 使用管理员身份运行

d:
cd %~dp0src\vendor\zhuitech

rd /s/q boot-admin
mklink /D boot-admin ..\..\..\..\..\github\boot-admin
rd /s/q boot-laravel
mklink /D boot-laravel ..\..\..\..\..\github\boot-laravel

pause