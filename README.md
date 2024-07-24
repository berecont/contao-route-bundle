# contao-route-bundle

Erstellt eine Inhaltselement 'Route berechnen'.  

Im Backend werden die Koordinaten des Zielortes eingegeben.  
In Form von Latitude und Longitude - jeweils als Wert in ein Feld.  

Im Frontend wird eine `<form>` ausgegeben. Hier bekommt der Besucher die Möglichkeit seinen Standort einzugeben und die Route berechnen zu lassen.  
Man wird nach dem Absenden auf die externe Seite von OpenStreetMap weitergeleitet.  

Ergebnis: Anzeig von Start- und Zielort in Form einer Streckenführung.  

# Installation  
Erstelle Verzeichnis `/bundles/contao-route-bundle/`  
Kopiere den Ordner `src` und die Datei `composer.json` in das Verzeichnis  
```
/src/  
/composer.json
```

ergänze die `/composer.json` der Contao Installation:  
```
    "require": {
        "berecont/contao-route-bundle": "^1.0"  
    }


    "repositories": {
        "contao-route-bundle": {
            "type": "path",
            "url": "bundles/contao-route-bundle"
        }
    }  
```
Starte den Contao Manager.  
In `PAKETE` wird die Erweiterung `berecont/contao-route-bundle` als `manuell hinzugefügt` eingetragen.  
Mit `Alle Pakete aktualisieren` wird die Erweiterung installiert.  
Nach der Installation muss die Datenbank aktualisiert werden.  
