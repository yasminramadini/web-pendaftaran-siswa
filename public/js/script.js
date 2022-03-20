function tambahRincian() {
  const rincian = document.querySelector("#rincian")
  const input = document.createElement("input")
  input.classList.add("form-control", "mb-2")
  input.setAttribute("name", "rincian[]")
  rincian.appendChild(input)
}

function tambahMisi() {
  const misi = document.querySelector("#misi")
  const misiWrapper = document.createElement("div")
  const input = document.createElement("input")
  const tombolHapus = document.createElement("button")
  
  //buat inputan
  input.classList.add("form-control")
  input.setAttribute("name", "misi[]")
  input.setAttribute("required", "")
  
  //buat tombol hapus inputan
  tombolHapus.classList.add("btn", "btn-danger")
  tombolHapus.innerHTML = '<i class="fas fa-ban"></i>'
  tombolHapus.setAttribute("type", "button")
  tombolHapus.addEventListener("click", function() {
    hapusMisi(this.parentElement)
  })
  
  misiWrapper.classList.add("input-group")
  misiWrapper.appendChild(input)
  misiWrapper.appendChild(tombolHapus)
  misiWrapper.classList.add("mb-3")
  
  misi.appendChild(misiWrapper)
}

function tambahVisi() {
  const visi = document.querySelector("#visi")
  const visiWrapper = document.createElement("div")
  const input = document.createElement("input")
  const tombolHapus = document.createElement("button")
  
  //buat inputan
  input.classList.add("form-control")
  input.setAttribute("name", "visi[]")
  input.setAttribute("required", "")
  
  //buat tombol hapus inputan
  tombolHapus.classList.add("btn", "btn-danger")
  tombolHapus.innerHTML = '<i class="fas fa-ban"></i>'
  tombolHapus.setAttribute("type", "button")
  tombolHapus.addEventListener("click", function() {
    hapusVisi(this.parentElement)
  })
  
  visiWrapper.classList.add("input-group")
  visiWrapper.appendChild(input)
  visiWrapper.appendChild(tombolHapus)
  visiWrapper.classList.add("mb-3")
  
  visi.appendChild(visiWrapper)
}

function tambahFasilitas() {
  const fasilitas = document.querySelector("#fasilitas")
  const fasilitasWrapper = document.createElement("div")
  const input = document.createElement("input")
  const tombolHapus = document.createElement("button")
  
  //buat inputan
  input.classList.add("form-control")
  input.setAttribute("name", "fasilitas[]")
  input.setAttribute("required", "")
  
  //buat tombol hapus inputan
  tombolHapus.classList.add("btn", "btn-danger")
  tombolHapus.innerHTML = '<i class="fas fa-ban"></i>'
  tombolHapus.setAttribute("type", "button")
  tombolHapus.addEventListener("click", function() {
    hapusFasilitas(this.parentElement)
  })
  
  fasilitasWrapper.classList.add("input-group")
  fasilitasWrapper.appendChild(input)
  fasilitasWrapper.appendChild(tombolHapus)
  fasilitasWrapper.classList.add("mb-3")
  
  fasilitas.appendChild(fasilitasWrapper)
}

function hapusFasilitas(elem) {
  elem.remove()
}

function hapusMisi(elem) {
  elem.remove()
}

function hapusVisi(elem) {
  elem.remove()
}