<form>
    <div class="row">
        <div class="six columns">
            <input class="u-full-width" type="text" name="name" placeholder="Name" required>
        </div>
        <div class="six columns">
            <input class="u-full-width" type="email" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            <select class="u-full-width" name="budget" required>
                <option value="" disabled selected>Budget</option>
                <option value="1">Less than $1000</option>
                <option value="2">$1,000 - $5,000</option>
                <option value="3">$5,000 - $15,000</option>
                <option value="4">Over $15,000</option>
                <option value="5">just want to talk</option>
            </select>
        </div>
        <div class="six columns">
            <select class="u-full-width" name="timeframe" required>
                <option value="" disabled selected>Timeframe</option>
                <option value="1">Less than 6 Weeks</option>
                <option value="2">6 Weeks - 3 Months</option>
                <option value="3">3 Months - 6 Months</option>
                <option value="4">need a pro in our corner</option>
                <option value="5">just want to talk</option>
            </select>
        </div>
    </div>
    <textarea class="u-full-width" placeholder="Tell us about your project. This will help us determine how we can work together." required></textarea>
    <textarea class="u-full-width" placeholder="Color spaminator says, tell us: Yellow + Blue = (pink or green)" required></textarea>
    <input class="button-primary large" type="submit" value="Send">
</form>
