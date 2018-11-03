public class Soal5 {
    public static void main(String[] args) {
		int jumlahHurufPadaKata = countChar("arkademy", 'a');
		System.out.println(jumlahHurufPadaKata);
	}
	
	public static int countChar(String kata, char huruf)
    {
    int jumlahHuruf = 0;
    for (int i=0; i < kata.length(); i++)
    {
        if (kata.charAt(i) == huruf)
        {
             jumlahHuruf++;
        }
    }
    return jumlahHuruf;
    }
}
