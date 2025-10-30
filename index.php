<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track the Cash</title>
    <link rel="stylesheet" href="main.css">
    <script src="app.js" defer></script>
</head>

<body>
    <main>
        <header class="header">
            <div class="title_wrapper">
                <h1 class="title">Expense Tracker</h1>
            </div>
            <div class="select_wrapper">
                <select name="select_period" id="time_window">
                    <option value="day">today</option>
                    <option value="week">this week</option>
                    <option value="month">this month</option>
                    <option value="year">this year</option>
                </select>
            </div>
        </header>
        <section class="categories">
            <article class="category income_card">
                <div class="category_icon">
                    <img src="#" alt="Income card icon" class="income_icon">
                </div>
                <div class="category_title">total income</div>
                <div class="category_value">
                    <p class="income_value">span.currency1,000</p>
                </div>
            </article>
            <article class="category expense_card">
                <div class="category_icon">
                    <img src="#" alt="Icon for expanse card" class="expense_icon">
                </div>
                <div class="category_title">
                    <p>total expenses</p>
                </div>
                <div class="category_value">
                    <p class="expense_value"><span class="currency"></span>1,000</p>
                </div>
            </article>
            <article class="category balance_card">
                <div class="category_icon">
                    <img src="#" alt="Icon for balance card" class="balance_icon">
                </div>
                <div class="category_title">
                    <p>balance</p>
                </div>
                <div class="category_value">
                    <p class="balance_value"><span class="currency"></span>1,000</p>
                </div>
            </article>
        </section>
        <section class="details">
            <article class="chart">
                <div class="chart_title">
                    <h2>expenses chart</h2>
                </div>
                <div class="chart_focus">
                    <div class="chart_graphics">
                    </div>
                    <div class="chart_categories">
                        <div class="chart_category">
                            <div class="chart_bullet"></div>
                            <p class="chart_category_title">
                                food
                            </p>
                        </div>
                        <div class="chart_category">
                            <div class="chart_bullet"></div>
                            <p class="chart_category_title">
                                bills
                            </p>
                        </div>
                        <div class="chart_category">
                            <div class="chart_bullet"></div>
                            <p class="chart_category_title">
                                transport
                            </p>
                        </div>
                        <div class="chart_category">
                            <div class="chart_bullet"></div>
                            <p class="chart_category_title">
                                other
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="transactions">
                <div class="transactions_title">
                    <h2>recent transactions</h2>
                </div>
                <div class="transactions_table_wrapper">
                    <table class="transactions_table">
                        <thead>
                            <tr>
                                <th scope="col">date</th>
                                <th scope="col">category</th>
                                <th scope="col">description</th>
                                <th scope="col">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10/30/25</td>
                                <td>food</td>
                                <td>groceries</td>
                                <td><span class="currency"></span> 120</td>
                            </tr>
                            <tr>
                                <td>10/30/25</td>
                                <td>transport</td>
                                <td>uber</td>
                                <td><span class="currency"></span> 27</td>
                            </tr>
                            <tr>
                                <td>10/30/25</td>
                                <td>other</td>
                                <td>shirt</td>
                                <td><span class="currency"></span> 30</td>
                            </tr>
                            <tr>
                                <td>10/30/25</td>
                                <td>bills</td>
                                <td>electric</td>
                                <td><span class="currency"></span> 220</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
    </main>
</body>

</html>