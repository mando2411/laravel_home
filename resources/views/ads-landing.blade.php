<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:,">
    <title>عروض خاصة | Styliiiish</title>
    <style>
        :root {
            --primary: #d51522;
            --secondary: #17273B;
            --bg: #f6f7fb;
            --card: #ffffff;
            --line: rgba(189,189,189,.4);
            --muted: #5a6678;
        }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: "Segoe UI", Tahoma, Arial, sans-serif; background: var(--bg); color: var(--secondary); }
        a { text-decoration: none; color: inherit; }
        .container { width: min(1100px, 92%); margin: 0 auto; }

        .top { background: var(--secondary); color: #fff; text-align: center; padding: 10px 12px; font-size: 13px; }

        .hero { padding: 34px 0 22px; }
        .hero-wrap {
            background: linear-gradient(160deg, #ffffff 0%, #fff4f5 100%);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 28px;
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 18px;
            align-items: center;
        }
        .badge { display: inline-flex; background: #fff; border: 1px solid var(--line); border-radius: 999px; padding: 8px 12px; font-size: 12px; font-weight: 800; color: var(--primary); }
        h1 { margin: 12px 0 8px; font-size: clamp(28px, 5vw, 44px); line-height: 1.2; }
        .lead { margin: 0 0 14px; color: var(--muted); font-size: 16px; }
        .points { margin: 0 0 16px; padding: 0; list-style: none; display: grid; gap: 8px; }
        .points li { background: #fff; border: 1px solid var(--line); border-radius: 10px; padding: 8px 10px; font-size: 13px; font-weight: 700; }

        .actions { display: flex; gap: 10px; flex-wrap: wrap; }
        .btn { min-height: 44px; padding: 0 18px; border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-light { background: #fff; border: 1px solid var(--line); }

        .promo-box {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 18px;
            text-align: center;
        }
        .promo-box strong { display: block; font-size: 34px; color: var(--primary); line-height: 1; }
        .promo-box span { display: block; font-size: 13px; color: var(--muted); margin-top: 6px; }

        .section { padding: 8px 0 32px; }
        .cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; }
        .card { background: #fff; border: 1px solid var(--line); border-radius: 14px; padding: 14px; }
        .card h3 { margin: 0 0 6px; font-size: 17px; }
        .card p { margin: 0; color: var(--muted); font-size: 14px; }

        @media (max-width: 900px) {
            .hero-wrap { grid-template-columns: 1fr; }
            .cards { grid-template-columns: 1fr; }
        }

        @media (max-width: 640px) {
            .hero { padding-top: 18px; }
            .hero-wrap { padding: 16px; border-radius: 14px; }
            .lead { font-size: 14px; }
            .actions .btn { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="top">عروض إعلانية حصرية • خصومات قوية لفترة محدودة</div>

    <main class="container">
        <section class="hero">
            <div class="hero-wrap">
                <div>
                    <span class="badge">عرض خاص من Styliiiish</span>
                    <h1>احجزي إطلالتك الآن بخصم يصل إلى 50%</h1>
                    <p class="lead">اكتشفي موديلات السهرة والزفاف والخطوبة الأكثر طلبًا مع توصيل سريع داخل مصر وسياسات واضحة.</p>

                    <ul class="points">
                        <li>✔️ خصومات حقيقية على منتجات مختارة</li>
                        <li>✔️ شحن داخل مصر خلال 2–10 أيام</li>
                        <li>✔️ شراء آمن وتجربة سلسة</li>
                    </ul>

                    <div class="actions">
                        <a class="btn btn-primary" href="/shop">تسوقي الآن</a>
                        <a class="btn btn-light" href="https://styliiiish.com/my-dresses/" target="_blank" rel="noopener">بيعي فستانك</a>
                    </div>
                </div>

                <aside class="promo-box">
                    <strong>50%</strong>
                    <span>خصم على مختارات مميزة</span>
                </aside>
            </div>
        </section>

        <section class="section">
            <div class="cards">
                <article class="card">
                    <h3>تجربة تسوق سريعة</h3>
                    <p>صفحة محسنة للحملات الإعلانية لتحقيق أعلى معدل تحويل.</p>
                </article>
                <article class="card">
                    <h3>أسعار تنافسية</h3>
                    <p>مزيج قوي بين الجودة والسعر مع عروض متجددة يوميًا.</p>
                </article>
                <article class="card">
                    <h3>ثقة ووضوح</h3>
                    <p>روابط وسياسات واضحة لدعم قرار الشراء بسرعة.</p>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
