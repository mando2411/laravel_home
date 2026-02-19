<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتجر | Styliiiish</title>
    <style>
        :root {
            --wf-main-rgb: 213, 21, 34;
            --wf-main-color: rgb(var(--wf-main-rgb));
            --wf-secondary-color: #17273B;
            --bg: #f6f7fb;
            --card: #ffffff;
            --text: #17273B;
            --muted: #5a6678;
            --line: rgba(189, 189, 189, 0.4);
            --primary: var(--wf-main-color);
            --secondary: var(--wf-secondary-color);
        }

        * { box-sizing: border-box; }
        body { margin: 0; font-family: "Segoe UI", Tahoma, Arial, sans-serif; background: var(--bg); color: var(--text); }
        a { text-decoration: none; color: inherit; }
        .container { width: min(1180px, 92%); margin: 0 auto; }

        .topbar { background: var(--secondary); color: #fff; font-size: 13px; }
        .topbar .container { min-height: 40px; display: flex; align-items: center; justify-content: center; }

        .header { background: #fff; border-bottom: 1px solid var(--line); position: sticky; top: 0; z-index: 40; }
        .header-inner { min-height: 74px; display: grid; grid-template-columns: auto 1fr auto; align-items: center; gap: 12px; }
        .brand { display: flex; flex-direction: column; gap: 2px; }
        .brand-title { font-size: 23px; font-weight: 900; color: var(--secondary); }
        .brand-sub { font-size: 11px; color: var(--muted); }

        .nav { display: flex; justify-content: center; gap: 8px; padding: 5px; border: 1px solid var(--line); border-radius: 12px; background: #f9fbff; }
        .nav a { padding: 8px 12px; border-radius: 8px; font-size: 14px; font-weight: 700; }
        .nav a.active, .nav a:hover { color: var(--primary); background: #fff4f5; }

        .head-btn { border: 1px solid var(--line); border-radius: 10px; min-width: 38px; min-height: 38px; display: inline-flex; align-items: center; justify-content: center; background: #fff; }

        .shop-head { padding: 24px 0 14px; }
        .shop-head h1 { margin: 0 0 6px; font-size: clamp(25px, 4vw, 35px); }
        .shop-head p { margin: 0; color: var(--muted); }

        .toolbar { display: grid; grid-template-columns: 1fr auto; gap: 10px; margin: 14px 0 18px; }
        .search-form { display: flex; border: 1px solid var(--line); border-radius: 12px; overflow: hidden; background: #fff; }
        .search-input { flex: 1; border: 0; padding: 0 12px; min-height: 44px; font-size: 14px; outline: 0; }
        .search-btn { border: 0; background: var(--secondary); color: #fff; padding: 0 14px; font-weight: 700; cursor: pointer; }
        .sort { border: 1px solid var(--line); border-radius: 12px; background: #fff; min-height: 44px; padding: 0 10px; font-size: 14px; }

        .grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; }
        .card { background: #fff; border: 1px solid var(--line); border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 8px 20px rgba(23,39,59,.05); }
        .media { position: relative; }
        .thumb { width: 100%; aspect-ratio: 3/4; object-fit: cover; background: #f2f2f5; }
        .badge { position: absolute; top: 10px; right: 10px; background: rgba(213,21,34,.92); color: #fff; border-radius: 999px; padding: 5px 9px; font-size: 11px; font-weight: 800; }
        .content { padding: 11px; display: flex; flex-direction: column; gap: 8px; height: 100%; }
        .name { margin: 0; font-size: 14px; line-height: 1.4; min-height: 40px; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden; }
        .prices { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .price { color: var(--primary); font-weight: 900; font-size: 17px; }
        .old { color: #8b8b97; text-decoration: line-through; font-size: 13px; }
        .actions { margin-top: auto; display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
        .btn-buy, .btn-view { min-height: 40px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; }
        .btn-buy { background: var(--primary); color: #fff; }
        .btn-view { border: 1px solid var(--line); color: var(--secondary); background: #fff; }

        .empty { background: #fff; border: 1px solid var(--line); border-radius: 14px; padding: 24px; text-align: center; }

        .pager { margin: 20px 0 34px; display: flex; gap: 8px; justify-content: center; flex-wrap: wrap; }
        .page-link { padding: 8px 12px; border-radius: 10px; border: 1px solid var(--line); background: #fff; font-weight: 700; }

        @media (max-width: 980px) {
            .header-inner { grid-template-columns: 1fr; padding: 10px 0; }
            .brand, .nav { justify-content: center; text-align: center; }
            .grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 640px) {
            .toolbar { grid-template-columns: 1fr; }
            .grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
            .actions { grid-template-columns: 1fr; }
            .nav { overflow-x: auto; justify-content: flex-start; }
            .name { min-height: auto; font-size: 13px; }
            .price { font-size: 15px; }
        }

        @media (max-width: 390px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="topbar"><div class="container">المتجر الرسمي • شحن داخل مصر 2–10 أيام</div></div>

    <header class="header">
        <div class="container header-inner">
            <a class="brand" href="/">
                <span class="brand-title">Styliiiish</span>
                <span class="brand-sub">لأن كل امرأة تستحق أن تتألق</span>
            </a>

            <nav class="nav" aria-label="Main Navigation">
                <a href="/">الرئيسية</a>
                <a class="active" href="/shop">المتجر</a>
                <a href="https://styliiiish.com/product-category/used-dress/" target="_blank" rel="noopener">الماركت بليس</a>
                <a href="https://styliiiish.com/my-dresses/" target="_blank" rel="noopener">بيعي فستانك</a>
                <a href="https://styliiiish.com/blog/" target="_blank" rel="noopener">المدونة</a>
            </nav>

            <div style="display:flex; gap:8px; justify-content:center;">
                <a class="head-btn" href="https://styliiiish.com/my-account/" target="_blank" rel="noopener" title="حسابي" aria-label="حسابي">👤</a>
                <a class="head-btn" href="https://styliiiish.com/wishlist/" target="_blank" rel="noopener" title="قائمة الأمنيات" aria-label="قائمة الأمنيات">❤</a>
                <a class="head-btn" href="https://styliiiish.com/cart/" target="_blank" rel="noopener" title="السلة" aria-label="السلة">🛒</a>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="shop-head">
            <h1>المتجر</h1>
            <p>اكتشفي أحدث فساتين السهرة والزفاف والخطوبة بأسعار تنافسية.</p>
        </section>

        <section class="toolbar">
            <form class="search-form" method="GET" action="/shop">
                <input class="search-input" type="search" name="q" value="{{ $search }}" placeholder="ابحثي عن منتج..." aria-label="ابحثي عن منتج">
                <input type="hidden" name="sort" value="{{ $sort }}">
                <button class="search-btn" type="submit">بحث</button>
            </form>

            <form method="GET" action="/shop">
                <input type="hidden" name="q" value="{{ $search }}">
                <select class="sort" name="sort" onchange="this.form.submit()">
                    <option value="newest" {{ $sort === 'newest' ? 'selected' : '' }}>الأحدث</option>
                    <option value="price_asc" {{ $sort === 'price_asc' ? 'selected' : '' }}>السعر: من الأقل للأعلى</option>
                    <option value="price_desc" {{ $sort === 'price_desc' ? 'selected' : '' }}>السعر: من الأعلى للأقل</option>
                </select>
            </form>
        </section>

        @if($products->count())
            <section class="grid">
                @foreach($products as $product)
                    @php
                        $price = (float) ($product->price ?? 0);
                        $regular = (float) ($product->regular_price ?? 0);
                        $isSale = $regular > 0 && $price > 0 && $regular > $price;
                        $discount = $isSale ? round((($regular - $price) / $regular) * 100) : 0;
                        $image = $product->image ?: 'https://styliiiish.com/wp-content/uploads/woocommerce-placeholder.png';
                    @endphp

                    <article class="card">
                        <div class="media">
                            <img class="thumb" src="{{ $image }}" alt="{{ $product->post_title }}" loading="lazy">
                            @if($isSale)
                                <span class="badge">خصم {{ $discount }}%</span>
                            @endif
                        </div>

                        <div class="content">
                            <h3 class="name">{{ $product->post_title }}</h3>
                            <div class="prices">
                                <span class="price">{{ $price > 0 ? number_format($price).' ج.م' : 'تواصل لمعرفة السعر' }}</span>
                                @if($isSale)
                                    <span class="old">{{ number_format($regular) }} ج.م</span>
                                @endif
                            </div>
                            <div class="actions">
                                <a class="btn-buy" href="/product/{{ $product->post_name }}/">اطلبي الآن</a>
                                <a class="btn-view" href="/product/{{ $product->post_name }}/">معاينة</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>

            <div class="pager">
                @if($products->onFirstPage())
                    <span class="page-link" style="opacity:.5;">السابق</span>
                @else
                    <a class="page-link" href="{{ $products->previousPageUrl() }}">السابق</a>
                @endif

                <span class="page-link">صفحة {{ $products->currentPage() }} من {{ $products->lastPage() }}</span>

                @if($products->hasMorePages())
                    <a class="page-link" href="{{ $products->nextPageUrl() }}">التالي</a>
                @else
                    <span class="page-link" style="opacity:.5;">التالي</span>
                @endif
            </div>
        @else
            <div class="empty">لا توجد منتجات مطابقة الآن. جرّبي البحث بكلمات مختلفة.</div>
        @endif
    </main>
</body>
</html>
