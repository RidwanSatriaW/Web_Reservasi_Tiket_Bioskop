function showLogTransaksi(){
    HiddenAndShow();
    document.getElementById('transaksi').removeAttribute('hidden');
};

function showInputJadwal(){
    HiddenAndShow();
    document.getElementById('plusJadwal').removeAttribute('hidden');
};

function showInputFilm(){
    HiddenAndShow();
    document.getElementById('plusFilm').removeAttribute('hidden');
};

function showInputAdmin(){
    HiddenAndShow();
    document.getElementById('plusAdmin').removeAttribute('hidden');
};

function showDataUser(){
    HiddenAndShow();
    document.getElementById('user').removeAttribute('hidden');
};

function showDataFilm(){
    HiddenAndShow();
    document.getElementById('film').removeAttribute('hidden');
};

function HiddenAndShow(){
    document.getElementById('user').setAttribute('hidden', true);
    document.getElementById('film').setAttribute('hidden', true);
    document.getElementById('plusAdmin').setAttribute('hidden', true);
    document.getElementById('plusFilm').setAttribute('hidden', true);
    document.getElementById('plusJadwal').setAttribute('hidden', true);
    document.getElementById('transaksi').setAttribute('hidden', true);
};