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
                <option value="1">Less than $1000</option>
                <option value="2">$1,000 - $5,000</option>
                <option value="3">$5,000 - $15,000</option>
                <option value="4">Over $15,000</option>
                <option value="5">Unspecified</option>
            </select>
        </div>
        <div class="six columns">
            <select class="u-full-width" name="timeframe">
                <option value="" disabled selected>Timeframe</option>
                <option value="1">Less than 6 Weeks</option>
                <option value="2">6 Weeks - 3 Months</option>
                <option value="3">3 Months - 6 Months</option>
                <option value="4">Ongoing</option>
                <option value="5">Unspecified</option>
            </select>
        </div>
    </div>
    <textarea class="u-full-width" placeholder="Tell us about your project. This will help us determine how we can work together."></textarea>
    <input class="button-primary large" type="submit" value="Send">
</form>