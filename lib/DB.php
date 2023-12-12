<?php

namespace praca_Pavlisin\Lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "nft_db";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int    $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if (!empty($host)) {
            $this->host = $host;
        }

        if (!empty($port)) {
            $this->port = $port;
        }

        if (!empty($username)) {
            $this->username = $username;
        }

        if (!empty($password)) {
            $this->password = $password;
        }

        if (!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT page_name, url FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['page_name']] = $menuItem['url'];
        }

        return $finalMenu;
    }

    public function getNftItems(): array
    {
        $sql = "
            SELECT t1.id, t1.title, t1.description, t1.price, t1.royalties,
                   t1.image_url, t1.ends_in, t2.username, t2.user_image_url 
            FROM nft AS t1
            INNER JOIN users AS t2 ON t1.users_id = t2.id;";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalNft = [];

        foreach ($data as $nftItem) {
            $finalNft[$nftItem['title']] =
                [
                'id' => $nftItem['id'],
                'description' => $nftItem['description'],
                'price' => $nftItem['price'],
                'royalties' => $nftItem['royalties'],
                'image_url' => $nftItem['image_url'],
                'ends_in' => $nftItem['ends_in'],
                'username' => $nftItem['username'],
                'user_image_url' => $nftItem['user_image_url'],
                ];
        }

        return $finalNft;
    }
    public function getUserInfo(): array
    {
        $sql = "
            SELECT t1.id, t2.username, t2.user_image_url, t1.earnings_eth
            FROM sellers AS t1
            INNER JOIN users AS t2 ON t2.id = t1.users_id
            ORDER BY t1.earnings_eth DESC;";

        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $result = [];

        foreach ($data as $user) {
            $result[$user['username']] =
                [
                    'id' => $user['id'],
                    'user_image_url' => $user['user_image_url'],
                    'earnings_eth' => $user['earnings_eth'],
                ];
        }

        return $result;
    }
    public function isUsernameExists($username)
    {
        $sql = "SELECT COUNT(*) as count FROM users WHERE username = :username";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':username', $username, \PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    public function getUserIdByUsername($username)
    {
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':username', $username, \PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($result) {
            return $result['id'];
        } else {
            return null;
        }
    }

    public function insertUser($username,$user_image_url)
    {
        $sql = "INSERT INTO users(username,user_image_url) 
           VALUES (:username,:user_image_url)";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(":username", $username);
        $stm->bindValue(":user_image_url", $user_image_url);
        $result = $stm->execute();

        return $result;
    }

    public function insertNft($title,$description,$price,$royalties,$image_url,$ends_in,$users_id)
    {
        $sql = "INSERT INTO nft(title,description,price,royalties,image_url,ends_in,users_id) 
           VALUES (:title,:description,:price, :royalties,:image_url, :ends_in, :users_id)";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(":title", $title);
        $stm->bindValue(":description", $description);
        $stm->bindValue(":price", $price);
        $stm->bindValue(":royalties", $royalties);
        $stm->bindValue(":image_url", $image_url);
        $stm->bindValue(":ends_in", $ends_in);
        $stm->bindValue(":users_id", $users_id);
        $result = $stm->execute();
        return $result;
    }
}
