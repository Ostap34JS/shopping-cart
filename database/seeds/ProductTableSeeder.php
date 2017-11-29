<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/81Q0deul8FL.jpg',
            'title'       => 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5 (Learning Php, Mysql, Javascript, Css & Html5)',
            'description' => 'Build interactive, data-driven websites with the potent combination of open-source technologies and web standards, even if you have only basic HTML knowledge. With this popular hands-on guide, you’ll tackle dynamic web programming with the help of today’s core technologies: PHP, MySQL, JavaScript, jQuery, CSS, and HTML5.',
            'price'       => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://www.packtpub.com/sites/default/files/7130_5232_Mastering%20PHP%20Design%20Patterns.jpg',
            'title'       => 'Mastering PHP Design Patterns',
            'description' => 'Develop robust and reusable code using a multitude of design patterns for PHP 7',
            'price'       => 59
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://dz13w8afd47il.cloudfront.net/sites/default/files/imagecache/ppv4_main_book_cover/B08866_MockupCover.png',
            'title'       => 'Scala Design Patterns - Second Edition',
            'description' => 'Learn how to write efficient, clean, and reusable code with Scala',
            'price'       => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/51BRZWn9saL._SX385_BO1,204,203,200_.jpg',
            'title'       => 'PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (Visual QuickPro Guides) ',
            'description' => '',
            'price'       => 70
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/51zv4qb9kNL._SX376_BO1,204,203,200_.jpg',
            'title'       => 'Eloquent JavaScript: A Modern Introduction to Programming ',
            'description' => '
                JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games. Though simple for beginners to pick up and play with, JavaScript is a flexible, complex language that you can use to build full-scale applications.
                
                Eloquent JavaScript, 2nd Edition dives deep into the JavaScript language to show you how to write beautiful, effective code. Author Marijn Haverbeke immerses you in example code from the start, while exercises and full-chapter projects give you hands-on experience with writing your own programs. As you build projects such as an artificial life simulation, a simple programming language, and a paint program, you\'ll learn:
                
                The essential elements of programming, including syntax, control, and data
                How to organize and clarify your code with object-oriented and functional programming techniques
                How to script the browser and make basic web applications
                How to use the DOM effectively to interact with browsers
                How to harness Node.js to build servers and utilities
                This edition is thoroughly revised and modernized to reflect the current state of JavaScript and web browsers, with brand-new material, such as a chapter on code performance in JavaÂ­Script, and expanded coverage of recursion and closures. All source code is available online in an interactive sandbox, where you can edit the code, run it, and see its output instantly.
                Isn\'t it time you became fluent in the language of the Web?',
            'price'       => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/51F7hGJqNeL._SX408_BO1,204,203,200_.jpg',
            'title'       => 'C++ Programming in easy steps, 5th Edition ',
            'description' => '
C++ Programming in easy steps, 5th Edition shows you how to program in the powerful C++ language. Now, in its fifth edition, this guide gives complete examples that illustrate each aspect with colourized source code.

C++ Programming in easy steps, 5th Edition begins by explaining how to install a free C++ compiler so you can quickly begin to create your own executable programs by copying the book s examples. It demonstrates all the C++ language basics before moving on to provide examples of Object Oriented Programming (OOP).

C++ is not platform-dependent, so programs can be created on any operating system. Most illustrations in this book depict output on the Windows operating system purely because it is the most widely used desktop platform. The examples can also be created on other platforms such as Linux or MacOS.

The book concludes by demonstrating how you can use your acquired knowledge to create programs graphically using a modern C++ Integrated Development Environment (IDE), such as Microsoft s Visual Studio Community Edition.

C++ Programming in easy steps, 5th Edition has an easy-to-follow style that will appeal to:

anyone who wants to begin programming in C++
programmers moving from another programming language
students who are studying C++ Programming at school or college
those seeking a career in computing who need a fundamental understanding of object oriented programming
This book makes no assumption that you have previous knowledge of any programming language so it is suitable for the beginner to programming in C++, whether you know C or not.',
            'price'       => 40
        ]);
        $product->save();

    }
}
