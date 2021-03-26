# https://kotakode.com/challenges/details/2/7207/Huruf-Bergantian

def hurufBergantian(inputString):
  # Inisialisasi variabel w dengan nilai hasil konversi string inputan menjadi list (array)
  w = list(inputString)
  # Inisialisasi variabel output dengan nilai 0
  output = 0
  # Looping dengan mengambil nilai dari variabel i sebagai indeks dan nilai dari variabel v sebagai value dari enumerasi list variabel w
  for i, v in enumerate(w):
    # Inisialisasi variabel j dengan nilai dari variabel i ditambah 1
    j = i + 1
    # Lakukan pengecekan apakah nilai dari variabel v sama dengan nilai dari variabel list w dengan indeks i dikurang 1
    if v == w[i-1]:
      # Hapus elemen pada variabel list w yang cocok dengan nilai dari argumen variabel v
      w.remove(v)
      # Tambahkan nilai dari variabel output dengan nilai 1
      output += 1
  return output
