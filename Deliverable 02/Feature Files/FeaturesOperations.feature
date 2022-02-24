Feature: FeaturesOperations
  In order to activate certain features of the website
  As a customer
  I need to click on the correct options on the website

  Scenario: Ask the website to generate a random choice of item
    Given I am in the catalogue page of the website
    Then I see a display of all the products available
    When I click "pick for me"
    Then a popup that randomly selects from the products comes on my screen and displays a random item from the catalogue

  Scenario: Change the website language to French
    Given I am on the website
    And the website is displayed in English 
    When I click on the "fr" button in the top right corner
    Then the information on  the website should display in French

  Scenario: Change the website language to English
    Given I am on the website
    And the website is displayed in English
    When I click on the "en" button in the top right corner
    Then the information on  the website should display in English
