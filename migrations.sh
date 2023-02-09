#!/bin/bash

# Aquest script s'encarregarà de gestionar tot el tema de les migracions.
# Automàticament, es descarregarà del repositori del GitHub el que hi ha, 
# i ho col·locarà als directoris corresponents

# Ens descarreguem el repositori del GitHub
wget -O pymedb.zip https://github.com/Tupiet-Classe/PymeDB/archive/refs/heads/main.zip
# Descomprimim el contingut i ho guardem al directori pymedb
unzip pymedb.zip -d pymedb
# Guardem la ruta on s'ha descomprimit l'arxiu en una variable
folder='pymedb/PymeDB-main'
# Movem el contingut descomprimit als directoris corresponents del Laravel
mv $folder/factories/* database/factories 
mv $folder/migrations/* database/migrations 
mv $folder/seeders/* database/seeders 
mv $folder/Models/* app/Models 
# Eliminem el directori pymedb, eliminant així tota la brossa
rm -rf pymedb
# Eliminem el zip
rm pymedb.zip
