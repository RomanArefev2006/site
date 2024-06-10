//                                                   𝕂𝕃𝕍ℕ𝕄ℝ𝕋

const allBtn = document.getElementById('all');
const gyroBtn = document.getElementById('gyrobtn');
const samBtn = document.getElementById('sambtn');
const gyroSection = document.querySelector('.gyro');
const gyroTitle = document.querySelector('.title__giro');
const samkatSection = document.querySelector('.samkat');
const samkatTitle = document.querySelector('.title__samkat');

allBtn.addEventListener('click', () => {
  samkatTitle.style.display = 'block'
  gyroTitle.style.display = 'block'
  gyroSection.style.display = 'grid';
  samkatSection.style.display = 'grid';
});

gyroBtn.addEventListener('click', () => {
  samkatTitle.style.display = 'none'
  gyroTitle.style.display = 'block'
  gyroSection.style.display = 'grid';
  samkatSection.style.display = 'none';
});

samBtn.addEventListener('click', () => {
  samkatTitle.style.display = 'block'
  gyroTitle.style.display = 'none'
  gyroSection.style.display = 'none';
  samkatSection.style.display = 'grid';
});

//                                                   𝕂𝕃𝕍ℕ𝕄ℝ𝕋