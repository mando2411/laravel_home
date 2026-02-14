<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styliiiish | فساتين سهرة وزفاف في مصر</title>
    <style>
        :root {
            --bg: #fffafc;
            --card: #ffffff;
            --text: #1f1f24;
            --muted: #6f6f7b;
            --line: #ececf2;
            --primary: #8f2357;
            --primary-2: #b42f6f;
            --success: #0a8f5b;
            --soft: #f9eef4;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        a { text-decoration: none; color: inherit; }

        .container {
            width: min(1180px, 92%);
            margin: 0 auto;
        }

        .promo {
            background: linear-gradient(90deg, var(--primary), var(--primary-2));
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 600;
        }

        .hero {
            padding: 56px 0 34px;
        }

        .hero-wrap {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 24px;
            align-items: stretch;
        }

        .hero-main, .hero-side {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 28px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--soft);
            color: var(--primary);
            border-radius: 999px;
            padding: 8px 12px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        h1 {
            margin: 0 0 10px;
            line-height: 1.25;
            font-size: clamp(28px, 4vw, 42px);
        }

        .lead {
            margin: 0 0 22px;
            color: var(--muted);
            font-size: 17px;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: .2s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover { background: var(--primary-2); }

        .btn-light {
            background: #fff;
            border: 1px solid var(--line);
        }

        .hero-side h3 {
            margin: 0 0 12px;
            font-size: 20px;
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 10px;
            color: var(--muted);
        }

        .stats {
            margin-top: 14px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .stat {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
        }

        .stat strong {
            display: block;
            font-size: 18px;
            color: var(--primary);
        }

        .stat span {
            font-size: 13px;
            color: var(--muted);
        }

        .section {
            padding: 18px 0 34px;
        }

        .section-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        .section-title {
            margin: 0;
            font-size: 24px;
        }

        .section-sub {
            margin: 2px 0 0;
            color: var(--muted);
            font-size: 14px;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .chip {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 12px 14px;
            text-align: center;
            font-weight: 700;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .thumb {
            width: 100%;
            aspect-ratio: 3/4;
            object-fit: cover;
            background: #f2f2f5;
        }

        .content {
            padding: 12px;
        }

        .name {
            margin: 0 0 8px;
            font-size: 15px;
            line-height: 1.45;
            min-height: 44px;
        }

        .prices {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        .price {
            color: var(--primary);
            font-weight: 800;
            font-size: 17px;
        }

        .old {
            color: #8b8b97;
            text-decoration: line-through;
            font-size: 14px;
        }

        .sale {
            display: inline-flex;
            background: #f2fff8;
            color: var(--success);
            border-radius: 999px;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: 700;
        }

        .buy {
            margin-top: auto;
            display: block;
            background: var(--primary);
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-weight: 700;
        }

        .trust {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .trust-item {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 14px;
        }

        .trust-item h4 {
            margin: 0 0 4px;
        }

        .trust-item p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .final-cta {
            background: linear-gradient(120deg, #20121a, #3e1b2f);
            color: #fff;
            border-radius: 18px;
            padding: 28px;
            margin: 12px 0 46px;
        }

        .final-cta h3 {
            margin: 0 0 8px;
            font-size: 30px;
        }

        .final-cta p {
            margin: 0 0 16px;
            color: #f4dce8;
            max-width: 740px;
        }

        .footer-note {
            text-align: center;
            color: var(--muted);
            font-size: 13px;
            padding-bottom: 24px;
        }

        @media (max-width: 980px) {
            .hero-wrap,
            .categories,
            .grid,
            .trust {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 640px) {
            .hero,
            .section {
                padding-top: 22px;
            }

            .hero-wrap,
            .categories,
            .grid,
            .trust,
            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="promo">خصومات الموسم وصلت إلى 50% + توصيل داخل مصر خلال 2–10 أيام عمل</div>

    <section class="hero">
        <div class="container hero-wrap">
            <div class="hero-main">
                <span class="badge">✨ Because Every Woman Deserves to Shine</span>
                <h1>أفخم فساتين السهرة والزفاف في مصر بأسعار تنافسية</h1>
                <p class="lead">اختاري إطلالتك القادمة من مجموعة فساتين مختارة بعناية، أو ابدئي بيع فستانك الآن وحوّليه لكاش بسرعة على Styliiiish.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="/shop/">تسوقي الفساتين الآن</a>
                    <a class="btn btn-light" href="/my-dresses/">بيعي فستانك الآن</a>
                </div>
            </div>

            <aside class="hero-side">
                <h3>لماذا Styliiiish؟</h3>
                <ul class="list">
                    <li>✓ منتجات منشورة مباشرة من متجر ووردبريس لحظيًا</li>
                    <li>✓ فساتين سهرة وزفاف وموديلات محتشمة بألوان ومقاسات متنوعة</li>
                    <li>✓ عروض يومية وأسعار مميزة على موديلات مختارة</li>
                    <li>✓ خدمة داخل مصر مع سياسات شحن واسترجاع واضحة</li>
                </ul>

                <div class="stats">
                    <div class="stat">
                        <strong>{{ number_format((int)($stats['total_products'] ?? 0)) }}+</strong>
                        <span>منتج متاح</span>
                    </div>
                    <div class="stat">
                        <strong>{{ number_format((int)($stats['sale_products'] ?? 0)) }}+</strong>
                        <span>منتج عليه خصم</span>
                    </div>
                    <div class="stat">
                        <strong>
                            @if(!empty($stats['min_price']))
                                {{ number_format((float)$stats['min_price']) }} ج.م
                            @else
                                —
                            @endif
                        </strong>
                        <span>أقل سعر حالي</span>
                    </div>
                    <div class="stat">
                        <strong>
                            @if(!empty($stats['max_price']))
                                {{ number_format((float)$stats['max_price']) }} ج.م
                            @else
                                —
                            @endif
                        </strong>
                        <span>أعلى سعر حالي</span>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <h2 class="section-title">تسوقي حسب المناسبة</h2>
                    <p class="section-sub">اختاري القسم المناسب بسرعة وابدئي الشراء مباشرة</p>
                </div>
            </div>
            <div class="categories">
                <a class="chip" href="/product-category/dress/evening-dresses/">فساتين سهرة</a>
                <a class="chip" href="/product-category/dress/wedding-dress/">فساتين زفاف</a>
                <a class="chip" href="/product-category/dress/engagement-dresses/">فساتين خطوبة</a>
                <a class="chip" href="/product-category/used-dress/">Marketplace فساتين</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <h2 class="section-title">منتجات مختارة لك الآن</h2>
                    <p class="section-sub">أحدث الفساتين من المتجر مع إبراز العروض والخصومات</p>
                </div>
                <a class="btn btn-light" href="/shop/">عرض كل المنتجات</a>
            </div>

            <div class="grid">
                @foreach($products as $product)
                    @php
                        $price = (float) ($product->price ?? 0);
                        $regular = (float) ($product->regular_price ?? 0);
                        $isSale = $regular > 0 && $price > 0 && $regular > $price;
                        $discount = $isSale ? round((($regular - $price) / $regular) * 100) : 0;
                        $image = $product->image ?: 'https://styliiiish.com/wp-content/uploads/woocommerce-placeholder.png';
                    @endphp

                    <article class="card">
                        <img class="thumb" src="{{ $image }}" alt="{{ $product->post_title }}" loading="lazy">
                        <div class="content">
                            <h3 class="name">{{ $product->post_title }}</h3>

                            <div class="prices">
                                <span class="price">{{ number_format($price) }} ج.م</span>
                                @if($isSale)
                                    <span class="old">{{ number_format($regular) }} ج.م</span>
                                    <span class="sale">خصم {{ $discount }}%</span>
                                @endif
                            </div>

                            <a class="buy" href="/product/{{ $product->post_name }}/">اطلبي الآن</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container trust">
            <article class="trust-item">
                <h4>🚚 شحن سريع داخل مصر</h4>
                <p>توصيل الطلبات خلال 2–10 أيام عمل حسب المحافظة.</p>
            </article>
            <article class="trust-item">
                <h4>💬 دعم ومتابعة قبل الشراء</h4>
                <p>فريقنا يساعدك تختاري المقاس والموديل الأنسب لمناسبتك.</p>
            </article>
            <article class="trust-item">
                <h4>💸 بيعي فستانك بسهولة</h4>
                <p>حوّلي فستانك المستعمل إلى دخل إضافي عبر المنصة.</p>
            </article>
        </div>
    </section>

    <section class="container final-cta">
        <h3>جاهزة تتألقي في مناسبتك القادمة؟</h3>
        <p>اكتشفي أجدد الموديلات والعروض الحصرية الآن، أو ارفعي فستانك للبيع في دقائق ووصول أسرع لآلاف المشترين في مصر.</p>
        <div class="actions">
            <a class="btn btn-primary" href="/shop/">ابدئي التسوق</a>
            <a class="btn btn-light" href="/my-dresses/">ابدئي البيع</a>
        </div>
    </section>

    <div class="footer-note">© {{ date('Y') }} Styliiiish Fashion House</div>
</body>
</html>