const nightModeStorage = localStorage.getItem('gmtNightMode')
const nightMode = document.querySelector('#night-mode')

if (nightModeStorage) {
  document.documentElement.classList.add('night-mode')
  nightMode.checked = true
}

nightMode.addEventListener('click', () => {
  document.documentElement.classList.toggle('night-mode')

  if (document.documentElement.classList.contains('night-mode')) {
    localStorage.setItem('gmtNightMode', true)
    return
  }
  localStorage.removeItem('gmtNightMode')
})