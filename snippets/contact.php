<form>
    <div class="row">
        <div class="six columns">
            <input class="u-full-width" type="text" name="name" placeholder="Name">
        </div>
        <div class="six columns">
            <input class="u-full-width" type="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            <select class="u-full-width" name="budget">
                <option value="" disabled selected>Budget</option>
                <option value="1">$100</option>
                <option value="2">$1,000</option>
                <option value="3">$10,000</option>
            </select>
        </div>
        <div class="six columns">
            <select class="u-full-width" name="timeframe">
                <option value="" disabled selected>Timeframe</option>
                <option value="1">One Week</option>
                <option value="2">One Month</option>
                <option value="3">Six Months</option>
            </select>
        </div>
    </div>
    <textarea class="u-full-width" placeholder="How can we help you?"></textarea>
    <input class="button-primary large" type="submit" value="Send">
</form>