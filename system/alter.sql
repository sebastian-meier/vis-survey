ALTER TABLE user ADD COLUMN tag text;
ALTER TABLE user ADD COLUMN done int(1) DEFAULT NULL;
UPDATE user SET tag = "cslab";
UPDATE user SET done = 1 WHERE id IN (SELECT user_id FROM action WHERE action.page = "bonus");
ALTER TABLE post_test ADD COLUMN comment text;