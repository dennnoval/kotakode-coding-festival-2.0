# https://kotakode.com/challenges/details/2/7265/Mencari-Pasangan

def cariPasangan(inputList,inputInt):
  # Inisialisasi variabel output dengan nilai list kosong
  output = []
  # Inisialisasi variabel x dengan nilai dari parameter inputList dan variabel y dengan nilai dari parameter inputInt
  x, y = inputList, inputInt
  # Looping pertama dengan indeks i selama panjang list variabel x, sebagai base index
  for i in range(len(x)):
    # Looping kedua dengan indeks j dengan jangkauan dari indeks i ditambah 1 hingga panjang list variabel x, sebagai index pembanding
    for j in range(i+1, len(x)):
      # Lakukan pengecekan apakah elemen dengan indeks i ditambah elemen dengan indeks j pada variabel list x nilainya sama dengan nilai dari variabel y
      if (x[i] + x[j]) == y:
        # Menyisipkan elemen baru ke variabel list output dengan nilai sebuah list yang berisi elemen dengan indeks i dan j dari variabel list x
        output.append([x[i], x[j]])
  return output
