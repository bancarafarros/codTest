// // 1 =5
// public class App {
// public static void main(String[] args) throws Exception {
// int total = 0;

// for (int i = 1; i <= 5; i++) {
// if ((i % 2) == 0) {
// total += 10;
// } else {
// total -= 5;
// }
// }
// System.out.println(total);
// }
// }

// // 2 =1
// public class App {
// public static void main(String[] args) throws Exception {
// int a = 2, b = 5, c = 7;

// for (;;) {
// if (a > 2 * b) {
// break;
// }
// a += (c - b);
// b--;
// c++;
// }
// System.out.println(c - a);
// }
// }

// // 3 =while (i > 0)
// public class App {
// public static void main(String[] args) {
// int i = 5;

// while (i > 0) {
// System.out.print(i);
// i--;
// }
// }
// }

// // 4 =int count = x+y; return count;
// public class App {
// public static void main(String[] args) {

// }
// }

// // 5 =CZZ
// public class App {

// public static void main(String[] args) {
// char[] ch = { 'Z', 'X', 'C' };
// char tmp;

// for (int i = 0; i < 5; i++) {
// tmp = ch[0];
// ch[0] = ch[2];
// ch[1] = tmp;
// ch[2] = ch[1];
// }
// System.out.println(ch);
// }
// }

// // 6 =1
// public class App {

// public static void main(String[] args) {
// int[] amount = { 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 };
// int[] numbers = { 1, 2, 3, 4, 2, 9, 9 };

// for (int i = 0; i < numbers.length; i++) {
// amount[numbers[i]]++;
// }
// System.out.println(amount[1]);
// }
// }

// 7 =select * from city where ID=M16ID;
// What is the correct query for all column for a city with the ID = M16ID

// | Field | Type |
// |--------------|------------|
// | ID | NUMBER |
// | NAME | VARCHAR2 (17) |
// | COUTRYCODE | VARCHAR2 (3) |
// | DISTRICT | VARCHAR2 (20) |
// | POPULATION | NUMBER |

// a select * from city where ID(M16ID);
// b select ID from city where NAME=M16ID;
// c select ID from city where ID=M16ID;
// d select NAME from city where ID=M16ID;
// e select * from city where ID=M16ID;

// 8 =select sum(POPULATION) from CITY where district = 'Surabaya';
// What is the correct query for the total population of all cities in CITY
// where District is Surabaya?

// | Field | Type |
// |--------------|------------|
// | ID | NUMBER |
// | NAME | VARCHAR2 (17) |
// | COUTRYCODE | VARCHAR2 (3) |
// | DISTRICT | VARCHAR2 (20) |
// | POPULATION | NUMBER |

// a select sum(DISTRICT) from CITY where district = 'Surabaya';
// b select sum(POPULATION) from CITY where district = 'Surabaya';
// c select POPULATION from CITY where district = 'Surabaya';
// d select sum(population) from CITY where CITY = 'Surabaya';
// e There is no correct answer on the given choice

// // 9 =1. sum(CITY.POPULATION); 2. CITY; 3. COUNTRY on CITY.COUNTRYCODE =
// // COUNTRY.CODE
// Given the incomplete query bellow. What is the correct query on line 1, 2, 3
// so that it will return the sum of the populations of all cities where the
// CONTINENT is 'Europe'. ?

// THE INCOMPLETE QUERY
// 1 _____
// 2 from _____
// 3 join _____
// 4 where CONTINENT = 'Europe'

// THE TABLES

// COUNTRY
// | Field | Type |
// |--------------|------------|
// | CODE | VARCHAR2 (3) | |
// | NAME | VARCHAR2 (44) |
// | CONTINENT | VARCHAR2 (13) |
// | REGION | VARCHAR2 (25) |
// | SURFACEAREA | NUMBER |
// | INDEPYEAR | VARCHAR2 (5) |
// | PUPULATION | NUMBER |
// | LIFEEXPEXTANCY | VARCHAR2 (4) |
// | GNP | NUMBER |
// | GNPOLD | VARCHAR2 (9) |
// | LOCALNAME | VARCHAR2 (44) |
// | GOVERMENTFORM | VARCHAR2 (44) |
// | HEADOFSTATE | VARCHAR2 (32) |
// | CAPITAL | VARCHAR2 (4) |
// | CODE2 | VARCHAR2 (2) |

// CITY
// | Field | Type |
// |--------------|------------|
// | ID | NUMBER |
// | NAME | VARCHAR2 (17) |
// | COUTRYCODE | VARCHAR2 (3) |
// | DISTRICT | VARCHAR2 (20) |
// | POPULATION | NUMBER |

// A 1. sum(CITY.COUNTRY); 2. CITY; 3. COUNTRY on CITY.COUNTRYCODE =
// COUNTRY.CODE
// B 1. count(CITY.POPULATION); 2. COUNTRY; 3. CITY on CITY.COUNTRYCODE =
// COUNTRY.CODE
// C 1. sum(CITY.POPULATION); 2. CITY; 3. COUNTRY on CITY.COUNTRYCODE =
// COUNTRY.CODE
// D 1. count(CITY.POPULATION); 2. CITY; 3. COUNTRY on CITY.COUNTRYCODE =
// COUNTRY.CODE
// E 1. sum(CITY.POPULATION); 2. CITY; 3. COUNTRY on CITY.CODE =
// COUNTRY.COUNTRYCODE

// // 10 =Square()
// class Square {
// private int side;

// public void setSide(int s) {
// this.side = s;
// }

// public int getArea() {
// return this.side * this.side;
// }
// }

// public class App {

// public static void main(String[] args) {
// int side = 5;
// Square sq = new Square();
// sq.setSide(side);
// System.out.println(sq.getArea());
// }
// }

// // 11 =500
// class Pesawat {
// private int kecepatan, panjang;

// public Pesawat(int kecepatan, int panjang) {
// this.kecepatan = kecepatan;
// this.panjang = panjang;
// }

// public int jarak(int detik) {
// return detik * this.kecepatan;
// }

// public void setKecepatan(int kecepatan) {
// this.kecepatan = kecepatan;
// }

// public void panjang() {
// System.out.println(this.panjang);
// }
// }

// public class App {
// public static void main(String[] args) {
// Pesawat boeing = new Pesawat(500, 100);
// boeing.setKecepatan(100);
// System.out.println(boeing.jarak(5));
// }
// }

// 12 =A B
import java.util.Scanner;

public class App {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String first = scan.nextLine();

        if (first.charAt(0) == 'A') {
            System.out.print("A ");
            if (first.charAt(1) == 'B') {
                System.out.print("B ");
            }
        } else if (first.charAt(1) == 'B') {
            System.out.print("B ");
            if (first.charAt(1) == 'C') {
                System.out.print("C ");
            }
        } else if (first == "AB") {
            System.out.print("AB");
        } else {
            System.out.print("-");
        }
        scan.close();
    }

}