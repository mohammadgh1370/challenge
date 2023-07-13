Run docker 

```
docker-compose up -d
```
Go into docker container

```
docker exec -it php-test bash
```
Run test

```
phpunit tests/CodilityTest.php
```

Run Code in terminal

```
php -r 'include "./src/Codility.php"; echo digits_sequence(10)."\n";'
```

Run Code in browser

```
http://localhost:90/?num=1000
```

### توضیحات برای پیچیدگی زمانی و حافظه

#### پیچیدگی زمانی (Time Complexity):

الگوریتمی که در کد بالا پیاده‌سازی شده است، دارای پیچیدگی زمانی O(n) است. این به معنی این است که زمان اجرای الگوریتم با افزایش اندازه ورودی (مقدار n) به صورت خطی افزایش می‌یابد. در این حالت، تعداد عملیات محاسباتی به طور مستقیم با مقدار n متناسب است.

در الگوریتم، با استفاده از یک حلقه for، اعضای دنباله از 2 تا n-1 محاسبه می‌شوند. هر مرحله از حلقه شامل یک عملیات جمع ارقام قبلی است که به تابع sum_of_digits فراخوانی می‌شود. این تابع نیز به صورت خطی با توجه به مقدار n اجرا می‌شود. بنابراین، زمان اجرای کل الگوریتم با توجه به تعداد اعضای دنباله وابسته به مقدار n خواهد بود.

#### پیچیدگی حافظه (Memory Complexity):

در کد بالا، استفاده از حافظه کش (Cache) برای ذخیره نتایج قبلی و جلوگیری از محاسبه مجدد آنها استفاده شده است. این باعث کاهش تعداد عملیات محاسباتی و در نتیجه کاهش مصرف حافظه می‌شود. به طور کلی، پیچیدگی حافظه الگوریتم بالا به صورت O(n) است.

علاوه بر استفاده از حافظه کش، تعداد متغیرهایی که در حلقه for و توابع مورد استفاده قرار می‌گیرند، ثابت است و مستقل از مقدار n است. بنابراین، مصرف حافظه الگوریتم به طور کلی به صورت خطی با افزایش اندازه ورودی (مقدار n) تغییر نمی‌کند.


## شرح تمرین

Let's consider the following infinite sequence:

0, 1, 1, 2, 3, 5, 8, 13, 12, 7, 10, 8, 9, ...

The 0th element is 0 and the 1st element is 1. The successive elements

are defined recursively. Each of them is the sum of the separate

digits of the two previous elements.

Write a function:

   def digits_sequence(n)

that, given an integer `n`, returns the `n`-th element of the above sequence.

Examples:

1. Given n = 2, the function should return 1.

2. Given n = 6, the function should return 8.

3. Given n = 10, the function should return 10.

Write an efficient algorithm for the following assumption:

`n` is an integer within the range 0..1,000,000,000.
Describe time and memory complexity of your algorithm
Dockerizing is a big plus
Writing unit tests is another big plus
