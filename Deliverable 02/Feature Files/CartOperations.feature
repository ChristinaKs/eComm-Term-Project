Feature: CartOperations
  In order to manage my cart
  As a customer
  I need to click the correct buttons to add, edit, or remove the products from my cart


  Scenario: View my cart
    Given I am on the website
    When I click on the cart icon
    Then a page should open and display the list of items in my cart, their prices and the quantities in my cart

  Scenario: Add an item to my cart
    Given I am on the website
    And I am on an item's information page
    Then I can see an editable box with the quantity set to 1
    When I click "Add item to cart"
    The item should be added to my cart in the quantity displayed in the box

  Scenario: Modify an item's quantity in my cart
    Given I am on the "my cart" part of the website
    Then I should see a list of my items, their quantities in an editable box, and their prices
    When I click on the up arrow, click on the down arrow, or type a new amount in the box
    Then the item quantity in my cart should change

  Scenario: Remove an item to my cart
    Given I am on the "my cart" part of the website
    Then I should see a list of the items in my cart
    When I click on the "remove" button next to one of the items
    Then the item in all its quantities should be removed from my cart
