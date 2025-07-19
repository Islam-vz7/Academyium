<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Agenda</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .day, .session {
      border: 1px solid #ccc;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 8px;
    }
    .day {
      background-color: #f5f5f5;
    }
    .session {
      background-color: #e7f0ff;
    }
    .btn {
      padding: 8px 12px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 8px;
    }
    .btn:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <h2>Agenda for Course</h2>

  <div id="agendaContainer"></div>
  <button class="btn" onclick="addDay()">+ Add Day</button>

  <br><br>
  <button class="btn" onclick="submitAgenda(event)">Submit Agenda</button>

  <script>
    let dayCount = 0;

    function getCourseIdFromURL() {
      const params = new URLSearchParams(window.location.search);
      return params.get('course_id');
    }

    function addDay() {
      const agendaContainer = document.getElementById('agendaContainer');
      const dayDiv = document.createElement('div');
      dayDiv.className = 'day';
      dayDiv.innerHTML = `
        <h3>Day ${dayCount + 1}</h3>
        <label>Day Title: <input type="text" name="dayTitle"></label><br><br>
        <div class="sessions"></div>
        <button type="button" class="btn" onclick="addSession(this)">+ Add Session</button>
      `;
      agendaContainer.appendChild(dayDiv);
      dayCount++;
    }

    function addSession(button) {
      const sessionContainer = button.previousElementSibling;
      const sessionDiv = document.createElement('div');
      sessionDiv.className = 'session';
      sessionDiv.innerHTML = `
        <label>Session Title: <input type="text" name="sessionTitle"></label><br>
        <label>Description: <input type="text" name="sessionDescription"></label><br>
        <label>Start Time: <input type="time" name="startTime"></label><br>
        <label>End Time: <input type="time" name="endTime"></label><br>
      `;
      sessionContainer.appendChild(sessionDiv);
    }

    function submitAgenda(event) {
      event.preventDefault();

      const form = document.createElement('form');
      form.method = 'POST';
      form.action = "../../controller/adminController/agendaController.php";

      const courseId = getCourseIdFromURL();
      if (!courseId) {
        alert("Course ID is missing from URL.");
        return;
      }

      const courseIdInput = document.createElement('input');
      courseIdInput.type = 'hidden';
      courseIdInput.name = 'course_id';
      courseIdInput.value = courseId;
      form.appendChild(courseIdInput);

      const days = document.querySelectorAll('.day');

      days.forEach((day, dayIndex) => {
        const dayTitle = day.querySelector('input[name="dayTitle"]').value;
        const dayTitleInput = document.createElement('input');
        dayTitleInput.type = 'hidden';
        dayTitleInput.name = `days[${dayIndex}][title]`;
        dayTitleInput.value = dayTitle;
        form.appendChild(dayTitleInput);

        const sessions = day.querySelectorAll('.session');
        sessions.forEach((session, sessionIndex) => {
          const fields = {
            'sessionTitle': 'title',
            'sessionDescription': 'description',
            'startTime': 'start_time',
            'endTime': 'end_time'
          };

          for (const [inputName, fieldName] of Object.entries(fields)) {
            const input = session.querySelector(`input[name="${inputName}"]`);
            if (input) {
              const hiddenInput = document.createElement('input');
              hiddenInput.type = 'hidden';
              hiddenInput.name = `days[${dayIndex}][sessions][${sessionIndex}][${fieldName}]`;
              hiddenInput.value = input.value;
              form.appendChild(hiddenInput);
            }
          }
        });
      });

      document.body.appendChild(form);
      form.submit();
    }
  </script>

</body>
</html>
