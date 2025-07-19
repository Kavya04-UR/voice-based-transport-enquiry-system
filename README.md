# 🚍 Voice-Based Transport Enquiry System

A DBMS-backed transport enquiry system that allows users to interact via voice commands to access real-time transport data, including bus/train schedules, routes, and ticket availability. Designed to make public transport queries more accessible and intuitive.

## 🎯 Features

- 🔊 **Voice Recognition**: Users can ask questions like "What time is the next bus to Airport?" or "Are there seats available on Train 101?"
- 📚 **Database Integration**: Uses relational database (MySQL/PostgreSQL/etc.) to store and retrieve transport data.
- 🔍 **Intelligent Query Matching**: Translates voice inputs into structured queries for accurate results.
- 📈 **Admin Dashboard**: Manage routes, schedules, and bookings.

## 🛠️ Technologies Used

| Layer          | Technology                         |
|----------------|-------------------------------------|
| Frontend       | HTML, CSS, JavaScript               |
| Voice Engine   | SpeechRecognition API / DeepSpeech |
| Backend        | Python / Node.js / Java             |
| Database       | MySQL / PostgreSQL                  |

## 🚦 How It Works

1. User speaks a query.
2. The voice is transcribed using a speech-to-text engine.
3. Transcribed text is parsed and mapped to relevant DBMS queries.
4. Results are fetched from the transport database and displayed or spoken back to the user.

## 🧠 Example Queries

- "Is there a bus to Whitefield?

## 📁 Project Structure

voice-enquiry-system ├── backend/ │ └── server.py ├── frontend/ │ └── index.html ├── database/ │ └── transport_schema.sql └── README.md

### 2. 🛢️ Create Database in phpMyAdmin

- Start XAMPP and enable **Apache** and **MySQL**
- Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create a database called 'voice-transport-enquiry-complete'
- Import or manually create tables:
  - `routes` – source, destination
  - `buses` – route_id, bus_number
    
link to access admin page:http://localhost/voice-transport-enquiry-complete/admin/admin-login.php
link to access user page:http://localhost/voice-transport-enquiry-complete/user/index.php

## ⚖️ License

This project is open-source under the MIT License. Feel free to fork and adapt it for your own city or transport system!

## 🤝 Contributions

Open to bug fixes, feature ideas, and voice model improvements. Submit a pull request or raise an issue!


