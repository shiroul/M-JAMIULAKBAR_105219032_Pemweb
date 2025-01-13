<h3> Panduan UAS Pemweb 2024/2025 </h3>
Contoh consume API dengan Jquery :
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

Panduan menjawab soal :
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
    <li> API Mengambil semua data jadwal : <code> route('event.get-json') </code> </li>
</ol>
