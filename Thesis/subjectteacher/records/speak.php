<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TTS Example</title>

  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container py-5">
    <p id="text" class="lead">


    
Student Name	Grade
Closas, Andre Sebastien	
0
<bR>
Gabutan, Hyuan Sebastian F.	
0
Macarambon, Mohammad Nasief S.	
0
Mariveles, Jazz Jhoren F.	
0
Montecillo, Christian Cleopas V.	
0
Orias, Jan Deirdre B.	
0
Tanael, Renz Theron T.	
0
Usman, Abdul Hadiy M.	
0
FEMALE
Student Name	Grade
Absin, Maire Gleam L.	
0
Alad-Ad, Wp. El Jane	
0
Alberto, Krissha Noreen M.	
0
Aliser, Chelsy Claire A.	
0
Allera, Nicole L.	
0
Arandoque, Charlyn A.	
0
Avenido, Trixie May P.	
0
Bongcawil, Abegail May D.	
0
Borongan, Mez Khenny D.	
0
Cabigquez, Keonna Lo D.	
0
Del Rosario, Alexandra Sophia C.	
0
Deromol, Ella Mae R.	
0
Duhaylungsod, Jea Valerie C.	
0
Dumalag, Sophia Mae C.	
0
Duran, Alyssa Mae O.	
0
Etor, Dimples C.	
0
Fuderanan, Nina Amor A.	
0
Lapinig, Kristina Faye L.	
0
Magsayo, Nicoletter R.	
0
Mehila, Alya Norshein S.	
0
Moquiala, Kemgee Azalea E.	
0
Oguis, Cylaine O.	
0
Pacquiao, Kimpril Jean S.	
0
Paghasian, Ella Marie C.	
0
Pano, Van Lorraine S.	
0
Patria, Jazmien S.	
0
Paunillan, Gwyneth Chyle L.	
0
Quijano, Dyna B.	
0
Ranes, Anray Los L.	
0
Sanguila, Jehanne M.	
0
Sinco, Hilary Jane T.	
0
Tejano, Christine May	
0
Tingal, Tifanny Mae M.	
0

    </p>
    <button id="speakButton" class="btn btn-primary">Speak</button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const textElement = document.getElementById('text');
      const speakButton = document.getElementById('speakButton');
      let speechSynthesis;

      // Check browser support for the Web Speech API
      if ('speechSynthesis' in window) {
        speechSynthesis = window.speechSynthesis;
      } else {
        console.error('Speech synthesis not supported.');
        return;
      }

      speakButton.addEventListener('click', function () {
        const text = textElement.innerText;

        // Create a new SpeechSynthesisUtterance instance
        const utterance = new SpeechSynthesisUtterance(text);

        // Set the voice to a female voice
        const voices = speechSynthesis.getVoices();
        const femaleVoice = voices.find(voice => voice.name === 'Google UK English Female');
        utterance.voice = femaleVoice;

        // Speak the text
        speechSynthesis.speak(utterance);
      });
    });
  </script>
</body>

</html>
