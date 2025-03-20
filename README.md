# Project Fitness

## Opdrachten

### Opdracht 1 - Database ontwerp

- Maak op basis van onderstaande userstories en het SQL-bestand een database ontwerp. 

### Opdracht 2 - Repository

- Maak gebruik van de repository: https://github.com/NOVA-college-Haarlem/fitness-project-blok-3
- Fork de repository
- Clone de repository

### Opdracht 3 - Website

- Maak een website voor een fitness club.

### Opdracht 4 - Controleren

- Controleer je website door gebruik te maken van de rubric.

## Userstories

## Overzichtspagina

**Als een** bezoeker  
**Wil ik** een overzicht zien van alle beschikbare fitnesslessen  
**Zodat ik** snel kan bladeren door verschillende lessen

**Als een** bezoeker  
**Wil ik** basisinformatie zien van elke les (naam, type, thumbnail afbeelding)  
**Zodat ik** een eerste indruk krijg zonder naar de detailpagina te hoeven gaan

**Als een** bezoeker  
**Wil ik** op een les kunnen klikken  
**Zodat ik** naar de detailpagina kan gaan voor meer informatie

## Filtering (beperkt tot 2)

**Als een** bezoeker  
**Wil ik** kunnen filteren op type workout (yoga, spinning, kickboksen, etc.)  
**Zodat ik** alleen lessen zie die passen bij mijn interesse

**Als een** bezoeker  
**Wil ik** kunnen filteren op moeilijkheidsgraad (beginner, gemiddeld, gevorderd)  
**Zodat ik** lessen kan vinden die passen bij mijn fitnessniveau

## Overige Functionaliteiten

**Als een** bezoeker  
**Wil ik** kunnen sorteren op duur (van kort naar lang of lang naar kort)  
**Zodat ik** lessen kan vinden die passen bij de tijd die ik beschikbaar heb

**Als een** bezoeker  
**Wil ik** zien hoeveel resultaten er beschikbaar zijn binnen mijn gekozen filters  
**Zodat ik** weet hoeveel opties ik heb

```sql
-- Database schema voor Fitness Classes met één tabel

-- Lessen tabel
CREATE TABLE fitnesslessen (
    id INT PRIMARY KEY AUTO_INCREMENT,
    naam VARCHAR(100) NOT NULL,
    type_workout VARCHAR(50) NOT NULL,
    moeilijkheidsgraad VARCHAR(20) NOT NULL, -- Beginner, Gemiddeld, Gevorderd
    duur INT NOT NULL, -- in minuten
    dag_van_week VARCHAR(20),
    tijdstip TIME,
    instructeur VARCHAR(100),
    max_deelnemers INT,
    calorieen INT, -- geschat aantal verbrande calorieën
    beschrijving TEXT,
    prijs DECIMAL(10, 2),
    thumbnail_url VARCHAR(255)
);

-- Voorbeelddata invoegen
INSERT INTO fitnesslessen (naam, type_workout, moeilijkheidsgraad, duur, dag_van_week, tijdstip, instructeur, max_deelnemers, calorieen, beschrijving, prijs, thumbnail_url) VALUES 
('Power Yoga', 'Yoga', 'Gemiddeld', 60, 'Maandag', '09:00:00', 'Lisa de Vries', 20, 350, 'Een dynamische yogales waarbij kracht, flexibiliteit en ademhaling centraal staan.', 12.50, 'poweryoga.jpg'),
('Spinning Extreme', 'Spinning', 'Gevorderd', 45, 'Dinsdag', '18:30:00', 'Mark Janssen', 15, 600, 'Intensieve spinning-sessie met intervallen en steile klimmen voor maximale vetverbranding.', 15.00, 'spinning.jpg'),
('Pilates Basics', 'Pilates', 'Beginner', 50, 'Woensdag', '10:15:00', 'Emma Bakker', 12, 250, 'Introductieles in Pilates, gericht op het versterken van de core en verbeteren van houding.', 10.00, 'pilates.jpg'),
('HIIT Challenge', 'HIIT', 'Gevorderd', 30, 'Donderdag', '17:45:00', 'Thomas Berg', 18, 450, 'High Intensity Interval Training voor maximale resultaten in minimale tijd.', 17.50, 'hiit.jpg'),
('Zumba Party', 'Zumba', 'Beginner', 60, 'Vrijdag', '19:00:00', 'Maria González', 25, 400, 'Dansworkout op Latijns-Amerikaanse muziek, leuk en effectief voor iedereen.', 12.50, 'zumba.jpg'),
('Body Pump', 'Krachttraining', 'Gemiddeld', 55, 'Zaterdag', '11:00:00', 'Peter Visser', 20, 380, 'Krachttraining op muziek met halters, een geweldige manier om spiermassa op te bouwen.', 15.00, 'bodypump.jpg'),
('Mindful Yoga', 'Yoga', 'Beginner', 75, 'Zondag', '09:30:00', 'Lisa de Vries', 15, 200, 'Rustgevende yogales met focus op mindfulness en ontspanning.', 12.50, 'mindfulyoga.jpg'),
('Kickboks Workout', 'Kickboksen', 'Gevorderd', 60, 'Maandag', '19:15:00', 'Mohammed El Amrani', 16, 700, 'Intensieve workout gebaseerd op kickbokstechnieken, goed voor conditie en kracht.', 17.50, 'kickboks.jpg'),
('Bootcamp', 'Bootcamp', 'Gevorderd', 50, 'Dinsdag', '07:00:00', 'Thomas Berg', 12, 600, 'Militair geïnspireerde outdoor training die je fysiek en mentaal uitdaagt.', 20.00, 'bootcamp.jpg'),
('Step & Shape', 'Step', 'Gemiddeld', 45, 'Woensdag', '18:00:00', 'Kim Wouters', 18, 350, 'Choreografische stepping met spierversterkende oefeningen voor het hele lichaam.', 12.50, 'step.jpg'),
('Aqua Fitness', 'Waterfitness', 'Beginner', 45, 'Donderdag', '10:30:00', 'Anna Mol', 20, 300, 'Laagdrempelige workout in het water, ideaal voor gewrichten en blessurepreventie.', 15.00, 'aqua.jpg'),
('Circuit Training', 'Circuit', 'Gemiddeld', 40, 'Vrijdag', '12:15:00', 'Peter Visser', 15, 450, 'Afwisselende training waarbij je langs verschillende oefenstations roteert.', 15.00, 'circuit.jpg'),
('Tai Chi', 'Tai Chi', 'Beginner', 60, 'Zaterdag', '09:00:00', 'Chen Wei', 12, 180, 'Chinese bewegingsleer voor balans, flexibiliteit en rust in lichaam en geest.', 12.50, 'taichi.jpg'),
('CrossFit', 'CrossFit', 'Gevorderd', 60, 'Zondag', '11:30:00', 'Rick de Jong', 10, 750, 'Functionele training met hoge intensiteit, gericht op kracht en conditie.', 20.00, 'crossfit.jpg'),
('Yin Yoga', 'Yoga', 'Gemiddeld', 90, 'Maandag', '20:30:00', 'Emma Bakker', 15, 150, 'Rustige, meditatieve vorm van yoga waarbij houdingen langer worden aangehouden.', 12.50, 'yinyoga.jpg');

```

## Beoordelingsrubric

### Overzichtspagina

| Criterium | Onvoldoende | Voldoende | Goed |
|-----------|-------------|------------|------|
| Basisweergave van lessen | Lessen worden niet of nauwelijks getoond | Lessen worden correct weergegeven | Lessen worden aantrekkelijk weergegeven met duidelijke visuele hiërarchie |
| Filter op type workout | Filter werkt niet of met ernstige fouten | Filter werkt, maar heeft kleine gebreken | Filter werkt perfect en is gebruiksvriendelijk |
| Filter op moeilijkheidsgraad | Filter werkt niet of met ernstige fouten | Filter werkt, maar heeft kleine gebreken | Filter werkt perfect en is gebruiksvriendelijk |
| Sortering op duur | Sortering werkt niet of met ernstige fouten | Sortering werkt, maar heeft kleine gebreken | Sortering werkt perfect en is gebruiksvriendelijk |
| Doorklikken naar detailpagina | Links werken niet of met ernstige fouten | Links werken, maar zijn niet optimaal geplaatst | Links werken perfect en zijn intuïtief |

### Detailpagina
| Criterium | Onvoldoende | Voldoende | Goed |
|-----------|-------------|------------|------|
| Weergave van les details | Details worden niet of nauwelijks getoond | Details worden correct weergegeven | Details worden uitgebreid en aantrekkelijk weergegeven |
| Teruglink naar overzichtspagina | Link werkt niet of is niet aanwezig | Link is aanwezig en werkt | Link is duidelijk zichtbaar en gebruiksvriendelijk |

### Algemene aspecten
| Criterium | Onvoldoende | Voldoende | Goed |
|-----------|-------------|------------|------|
| Database connectie | Query's werken niet of met ernstige fouten | Query's werken, maar zijn niet geoptimaliseerd | Query's werken goed en zijn geoptimaliseerd |
| Code kwaliteit | Rommelige code met veel fouten | Redelijk nette code met enkele fouten | Nette, goed gestructureerde code zonder fouten |

