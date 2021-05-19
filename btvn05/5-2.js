/* sử dụng tính kế thừa từ class person được sử dụng ở bài 1, để tạo ra class teacher 
   .sử dụng từ khóa extends để sử dụng tính kế thừa: class Teacher extends Person
   . viết lại phương thức showInfo cho teacher
*/

class Person {
    constructor (name="A",dataOfBirth="01/01/2000") {
        this.name=name;
        this.dob=dataOfBirth;
        this.calculateAge();  
    }

    calculateAge() {
        this.age=new Date().getFullYear()-this.dob.getFullYear();
    }

    showInfo() {
       console.log(`this is ${this.name}, ${this.age} years old `);
    }

}

//class teacher

class Teacher extends Person {
    constructor(name,dob) {
            super(name,bird);
            this.calculateExperience();
    }

    calculateExperience() {
        if(this.age>22) {
            this.Experience=age-22;
        }
        else {
            this.Experience=0;
        }

    }

    showInfo() {
        console.log(
            `this is teacher ${this.name}, ${this.age} years old, ${this.Experience} years of experiences`
        );
    }

}