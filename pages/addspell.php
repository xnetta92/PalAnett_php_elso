<form action="database/spell.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group mt-3">
                <label for="spell">Spell name</label>
                <input type="text" id="spell" name="spell" required  class="form-control">
            </div>
            <div class="form-group mt-3">
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
            <div class="form-group mt-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <label class="form-label" for="level">Level:</label>
                <input value="0" type="number" name="level" id="level" class="form-control" />   
            </div>
            <div class="form-group mt-3">
                <label for="icon" class="form-label">Icon:</label>
                <input class="form-control" type="file" name="icon" id="icon">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>