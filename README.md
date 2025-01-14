<h1> Panduan UAS Pemweb 2024/2025 </h1> 
<br /> <h3> Contoh consume API dengan Jquery : </h3>
<code>
    &lt;script&gt;
        $.ajax({
    		method: "GET",
    		url: "", // Isi Route
    		success: function (res) {
    			// Proses data API disini
    		},
    	});
    &lt;/script&gt;
</code>

<br /> <h3> Panduan menjawab soal : </h3>
<ol>
    <li> Form untuk login yaitu : <code> route('auth') </code> </li>
    <li> Form untuk menambah jadwal : <code> route('event.submit') </code> </li>
    <li> Pada nomor ini : 
        <ul>
            <li> Mengambil data 1 jadwal : <code> route('event.get-selected-data') </code> </li>
            <li> Form Mengupdate data jadwal : <code> route('event.update') </code> </li>
            <li> Form Menghapus data jadwal : <code> route('event.delete') </code> </li>
        </ul>
    </li>
    <li> API Mengambil semua data jadwal : <code> route('event.get-json') </code>. Gunakan variabel <code> calendar </code> yang sudah didefinisikan pada script untuk melakukan visualisasi jadwal ke dalam kalender </li>
</ol>

<br /> <h3> Perintah untuk trigger tombol </h3>
<code>
$('#idTombol').on('click', function() {
    // Logika saat tombol edit diklik
});
</code>
<br /> Atau
<code>
document.getElementById('btn-edit').addEventListener('click', function() {
    // Logika saat tombol edit diklik
});
</code>
