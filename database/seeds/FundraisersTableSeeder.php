<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FundraisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fundraisers')->insert([
          ["name" => "Boosterthon Fun Run"],
          ["name" => "Crowdfunding"],
          ["name" => "Matching Gifts"],
          ["name" => "Double the Donation"],
          ["name" => "Cookbook"],
          ["name" => "Art Auction"],
          ["name" => "Bingo"],
          ["name" => "Matching Gifts"],
          ["name" => "Volunteer Grants"],
          ["name" => "Amazon"],
          ["name" => "Discount Cards"],
          ["name" => "Carnival"],
          ["name" => "Field Day"],
          ["name" => "Giving Kiosks"],
          ["name" => "Crowdfunding"],
          ["name" => "Ebates"],
          ["name" => "Popcorn Sales"],
          ["name" => "Comedy Night"],
          ["name" => "Post It Note Challenge"],
          ["name" => "Peer-to-Peer Fundraising"],
          ["name" => "Community Grants"],
          ["name" => "GoodSearch"],
          ["name" => "Flower Bulb Fundraiser"],
          ["name" => "Chili Cook-Off"],
          ["name" => "Pick an Egg"],
          ["name" => "Shoe Drive"],
          ["name" => "Team Volunteer Grants"],
          ["name" => "Online Auction"],
          ["name" => "School Calendars"],
          ["name" => "Karaoke Night"],
          ["name" => "Relay Race"],
          ["name" => "Online Donations"],
          ["name" => "In-Kind Donations"],
          ["name" => "Qmee"],
          ["name" => "Yankee Candle Sale"],
          ["name" => "Box Tops"],
          ["name" => "Hat Day"],
          ["name" => "Hike Day"],
          ["name" => "Book Sale"],
          ["name" => "Balloon Raffle"],
          ["name" => "Bottle & Can Drive"],
          ["name" => "Handmade Cards"],
          ["name" => "Hula Hoop Contest"],
          ["name" => "School Dance"],
          ["name" => "Wealth Screening"],
          ["name" => "Jellybean Count"],
          ["name" => "Car Decals"],
          ["name" => "Penny Wars"],
          ["name" => "Pajama Day"],
          ["name" => "Serve-a-thon"],
          ["name" => "Engraved Bricks"],
          ["name" => "LemonAID Stand"],
          ["name" => "Cell Phone Recycling"],
          ["name" => "Principal Challenge"],
          ["name" => "Spelling Bee"],
          ["name" => "Talent Show"],
          ["name" => "Photography Contest"],
          ["name" => "Make a Snake"],
          ["name" => "Fish Tank Fundraiser"],
          ["name" => "Scavenger Hunt"],
          ["name" => "Spinners"],
          ["name" => "Teachers in Jail"],
          ["name" => "Yard Sale"],
          ["name" => "No Uniform Day"],
          ["name" => "Read-a-thon"],
          ["name" => "Parents' Party"],
          ["name" => "Straw Draw"],
        ]);
    }
}
