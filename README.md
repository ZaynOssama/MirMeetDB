# MirMeetDB
Repositori compartit amb les dades unificades per treballar a Pymeralia

## Script
Aquest repositori inclou un script, que permet gestionar tot el tema de les migracions d'una manera més àgil. Amb només executar l'script, es descarregarà tot el contingut d'aquest repositori del GitHub als directoris corresponents. 

La idea és la de simplificar al màxim aquesta feina tant tediosa de gestionar les migracions.

### Requisits
Aquest script s'ha de trobar al directori arrel del projecte de Laravel, és a dir, a la mateixa altura que els directoris `app` o `database`.

### Funcionament
Per posar en marxa aquest script, només cal executar la següent comanda:

```bash
bash migrations.sh
```

**SI ESTÀS EN WINDOWS:** Potser hauràs de posar **sail** davant.

I llest! L'script ja hauria d'haver creat tots els fitxers necessaris.
