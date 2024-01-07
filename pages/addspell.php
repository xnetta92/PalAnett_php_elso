<form action="database/spell.php" method="post">
        <div class="container">
            <div class="form-group">
                <label for="spell_name">Spell name</label>
                <input type="text" id="spell_name" name="spell_name" required  class="form-control">
            </div>
            <div class="form-group">
                <label for="type">Type: </label>
                <select class="form-select" name="type" id="type">
                <option value="Control">Control</option>
                <option value="Damage">Damage</option>
                <option value="Essential">Essential</option>
                <option value="Force">Force</option>
                <option value="Transfiguration">Transfiguration</option>
                <option value="Unforgivable Curse">Unforgivable Curse</option>
                <option value="Utility">Utility</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label" for="typeNumber">Level:</label>
                <input value="0" type="number" id="typeNumber" class="form-control" />   
            </div>
            <div class="form-group">
                <label for="icon" class="form-label">Icon</label>
                <input class="form-control" type="file" id="icon">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>