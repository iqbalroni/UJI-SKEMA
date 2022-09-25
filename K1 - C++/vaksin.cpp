#include <iostream>

using namespace std;

void Screening(){
	string tensi,suhu;
	cout<<"Masukan Tensi Tubuh : ";
	cin>>tensi;
	cout<<"Masukan Suhu Tubuh : ";
	cin>>suhu;
	system("cls");
}


int main(){
	char menu;
	int pilih;
	string nama,NIK,ttl,usia,jk,kec,kab;
	
	batal:
	system("cls");
	cout<<"=== MENU VASKINASI ===="<<endl;
	cout<<endl;
	cout<<"APAKAH KAMU SUDAH VAKSIN? (Y/T) :";
	cin>>menu;
	if(menu == 'y' | menu == 'Y'){
		system("cls");
		cout<<"===REGISTRASI_ULANG==="<<endl;
		cout<<"Nama Lengkap : ";
		cin>>nama;
		cout<<"NIK          : ";
		cin>>NIK;
		system("cls");
		cout<<"==============================================="<<endl;
		cout<<"Terima kasih identitas anda sudah terverifikasi"<<endl;
		cout<<"==============================================="<<endl;
		Screening();
		cout<<"======================="<<endl;
		cout<<nama + " Siap Di Vaksin"<<endl;
		cout<<"======================="<<endl;
	}else{
		reset:
		system("cls");
		cout<<"===DATA_PESERTA_VAKSIN==="<<endl;
		cout<<endl;
		cout<<"Nama Lengkap :";
		cin>>nama;
		cout<<"NIK          :";
		cin>>NIK;
		cout<<"Tempat,Tanggal Lahir :";
		cin>>ttl;
		cout<<"Usia         : ";
		cin>>usia;
		cout<<"Jenis Kelamin : ";
		cin>>jk;
		cout<<"Kecamatan : ";
		cin>>kec;
		cout<<"Kabupaten : ";
		cin>>kab;
		
		cout<<"======================="<<endl;
		cout<<"1.Submit"<<endl;
		cout<<"2.Batal"<<endl;
		cout<<"3.Reset"<<endl;
		cout<<"Pilih Nomor Di Atas : ";
		cin>>pilih;
		
		if(pilih == 1){
			system("cls");
			cout<<"==============================================="<<endl;
			cout<<"Terima kasih identitas awal anda sudah diverifikasi"<<endl;
			cout<<"==============================================="<<endl;
			Screening();
			cout<<"======================="<<endl;
			cout<<nama + " Siap Di Vaksin"<<endl;
			cout<<"======================="<<endl;
		}else if(pilih == 2){
			goto batal;
		}else if(pilih == 3){
			goto reset;
		}
		
		
	}
}
