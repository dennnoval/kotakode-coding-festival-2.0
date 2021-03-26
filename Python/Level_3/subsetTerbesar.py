# https://kotakode.com/challenges/details/2/7266/Subset-Terbesar

def subsetTerbesar(inputList):
  # Mempersingkat penamaan variabel dari nama inputList menjadi x
  x = inputList
  # Inisialisasi variabel tmp dengan nilai list kosong
  tmp = []
  # Inisialisasi variabel l sebagai jumlah elemen dari list x
  l = len(x)
  # Inisialisasi variabel s dengan nilai 2 sebagai jumlah lompatan looping
  s = 2
  # Looping pertama dengan jangkauan dari 0 hingga nilai l dengan indeks i
  i = 0
  while i < l:
    # Inisialisasi variabel xx dengan nilai elemen indeks ke-i dari list x
    xx = x[i]
    # Looping kedua dengan j sebagai indeks dimulai dari i+2 hingga nilai l dengan s sebagai jumlah lompatan looping nya
    for j in range(i+s,l,s):
      # Tambahkan nilai xx dengan nilai elemen ke-j dari list x
      xx += x[j]
      # Sisipkan elemen baru xx ke dalam list tmp
      tmp.append(xx)
    # Tambahkan indeks looping i dengan nilai 1
    i += 1
    # Cek apakah jumlah lompatan looping kurang dari nilai l
    if s < (l-1) and i == (l-1):
        # Tambahkan nilai s dengan nilai 1
        s += 1
        # Ubah nilai i menjadi 0
        i = 0
  # Simpan nilai maksimal dari set list tmp ke dalam variabel output
  output = max(set(tmp))
  return output
