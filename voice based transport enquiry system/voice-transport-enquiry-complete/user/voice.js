function startRecognition() {
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.lang = 'en-IN';
    recognition.start();

    recognition.onresult = function(event) {
        const text = event.results[0][0].transcript;
        document.getElementById("speechText").innerText = text;

        fetch("../find-bus.php?query=" + encodeURIComponent(text))
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = data;
                speakResult(data); // Optional: Speak the result
            });
    };

    recognition.onerror = function(event) {
        alert("Voice error: " + event.error);
    };
}

function speakResult(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = 'en-IN';
    speechSynthesis.speak(utterance);
}
