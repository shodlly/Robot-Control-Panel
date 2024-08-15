const buttons = document.querySelectorAll('.controls button');
const robotStatus = document.getElementById('robot-status');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const command = button.id; 
    sendCommand(command);
  });
});

function sendCommand(command) {
  fetch('php/send_command.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ command: command })
  })
  .then(response => response.text())
  .then(data => {
    console.log(data); 
    // Update robot status (simulated for now)
    robotStatus.textContent = command; 
  })
  .catch(error => console.error('Error:', error));
}