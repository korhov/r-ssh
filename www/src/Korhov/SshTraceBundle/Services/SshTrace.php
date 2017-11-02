<?php
namespace Korhov\SshTraceBundle\Services;

use phpseclib\Crypt\RSA;
use phpseclib\Net\SSH2;

class SshTrace
{
    protected $private_key;

    protected $username;

    /**
     * Устанавливаем приватный ключ
     *
     * @param string $private_key
     * @return $this
     */
    public function setPrivateKey($private_key)
    {
        $this->private_key = $private_key;

        return $this;
    }

    /**
     * Устанавливаем имя пользователя
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Отправляем запрос к сокету и получаем ответы
     *
     * @param string $host
     * @param string $command
     * @param string $soket_path
     * @return string
     */
    public function exec($host, $command, $soket_path)
    {
        $key = new RSA();
        $key->loadKey($this->private_key);

        $ssh = new SSH2($host);
        if (!$ssh->login($this->username, $key)) {
            return false;
        }

        $command = base64_encode($command);
        return $ssh->exec('echo ' . $command . ' | base64 -D | socat - UNIX-CONNECT:' . $soket_path);
    }
}
