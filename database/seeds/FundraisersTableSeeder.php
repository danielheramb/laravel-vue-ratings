<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FundraisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $current_timestamp = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('fundraisers')->insert([
          ["name" => "Boosterthon Fun Run","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Crowdfunding","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Matching Gifts","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Double the Donation","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Cookbook","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Art Auction","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Bingo","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Matching Gifts","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Volunteer Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Amazon","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Discount Cards","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Carnival","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Field Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Giving Kiosks","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Crowdfunding","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Ebates","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Popcorn Sales","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Comedy Night","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Post It Note Challenge","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Peer-to-Peer Fundraising","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Community Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "GoodSearch","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Flower Bulb Fundraiser","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Chili Cook-Off","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Pick an Egg","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Shoe Drive","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Team Volunteer Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Online Auction","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "School Calendars","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Karaoke Night","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Relay Race","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Online Donations","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "In-Kind Donations","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Qmee","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Yankee Candle Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Box Tops","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Hat Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Hike Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Book Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Balloon Raffle","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Bottle & Can Drive","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Handmade Cards","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Hula Hoop Contest","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "School Dance","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Wealth Screening","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Jellybean Count","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Car Decals","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Penny Wars","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Pajama Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Serve-a-thon","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Engraved Bricks","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "LemonAID Stand","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Cell Phone Recycling","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Principal Challenge","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Spelling Bee","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Talent Show","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Photography Contest","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Make a Snake","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Fish Tank Fundraiser","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Scavenger Hunt","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Spinners","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Teachers in Jail","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Yard Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "No Uniform Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Read-a-thon","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Parents' Party","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
          ["name" => "Straw Draw","created_at" => $current_timestamp,"updated_at" => $current_timestamp],
        ]);
    }
}
