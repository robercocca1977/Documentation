<?
$cSharpVariableName = "spy";
$pyVariableName = "spy";
$ticker = "SPY";
include(DOCS_RESOURCES."/securities/data-normalization.php");
?>

<p>When you request historical data, the <code class="csharp">History</code><code class="python">history</code> method uses the data normalization of your security subscription. To get historical data with a different data normalization, pass a <code class="csharp">dataNormalizationMode</code><code class="python">data_normalization_mode</code> argument to the <code class="csharp">History</code><code class="python">history</code> method.</p>
<div class="section-example-container">
<pre class="csharp">var history = qb.History(qb.Securities.Keys, qb.Time-TimeSpan.FromDays(10), qb.Time, dataNormalizationMode: DataNormalizationMode.SplitAdjusted);</pre>
<pre class="python">history = qb.history(qb.securities.keys, qb.time-timedelta(days=10), qb.time, dataNormalizationMode=DataNormalizationMode.SPLIT_ADJUSTED)</pre>
</div>
