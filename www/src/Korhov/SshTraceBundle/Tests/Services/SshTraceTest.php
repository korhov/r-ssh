<?php

namespace Korhov\SshTraceBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SshTraceTest extends WebTestCase
{
    public function testExec()
    {
        $client = static::createClient();

        $ssh_trace = $client->getContainer()->get('ssh_trace')
            ->setPrivateKey('MIIEpQIBAAKCAQEAv6DofH99osP1jbJYZMWBqyci9l8n7p68FAvNmo1JNUJRuN7W
saaFGgWE9xMRx9XWklJUr4MB7VatPsWZFJvPY5P5h7ip/kEXaOTfZkRUpbWRSFmx
6TAFyJHbJOkE2PlpFMoqku+86Ln9NSVRkYkPL6C3qhhv/kR8Ua2zx1m/iqh5PIoe
76VM8Huz6/o3ZvdN7cXBUCFnfjgkQ+Z/FCTweIbu6iGmlITXjNwOCXTeWA9Lqm1E
w/F2vso4oXwgRcB/LSp/A0HEykykFXvMarVjrLrlhSMgL4Ar3QJcDMzZMGaCUtqw
EOxYtlLkjOjw4Qnq06uf9gYH6tZWRW+yWAdBSQIDAQABAoIBAQC6v5lSGvzZLpeT
K4cxTbl8jntoFnvX9CHed1I7mA0MNkFmJOSd5GY6Yb6e+pqNYTvnBQ06rjWmkp3r
Wq5Ag0etB3xaZABmpBCoTMPZ6iWECFo5ZBAZ7I72VA54/g2XVhiuBgdPgwta0kaN
EH1Zk3SVOc9DmOUrqpptDxbw4+niuXUZY+IqmuQB3hWXz4ws40lhAT3y3gRQqAlh
c07AHVIcQORG0r5wewzsksgPsRfdvqwmSxzEWcMAtNQs6vxrc5hJwM8V1FnvTpgu
i+aAhaxOqUQqw+rcYzlDLu9/ozR6kLPAHrneEqaB07t7APYc66Jnq7C2LG+oDjpl
nyTHjNPxAoGBAN3osKIkqIAFxxybrVoWUsTLIjISecB9av3p7c/SAv6Fbt3GHvRC
JyFxYvvi8KBxXZ8GRhk6/mw0N7opZ5koo+fYJdXXgkWZreQQlqPH+0doGtF479qn
Z8zIOSQbDOPXP61N2w6/+/1/9sFdwF3I5sK30LSKibKcPmYBIuGxouKTAoGBAN0R
VygMVYRZHeX/EnjduEeCwz69BY+yRR356iAylIpivHvj1Ya/OYDIaCMvBoc9thui
YFTrIDFhKNUjBzLuKrOHY8P/6ndmM1SgA8cWub0DpytseoAAxIs+HlPMq6j5xCfD
TRgNylLTPAiz4OLiIYYlQhdDSUK06LQMFPpv+CozAoGBALdVBpjusEcUfuujshQ7
XSY4rIexu+TLuRkNquuHFfIxSubuR6SFAs8eXii71RC4mCBJjqBJnOjIO0IR8wUW
DlP8v0VsRrQ5wvAoxEuLbI4R9BYbVA3RQHBu+sZZksypiHIlYFVPR2Cn17TpP4Q7
9mnocwS1cA2gB+0+AxNzLp8BAoGAF39eWj1lYZnvWaERH5PBoKg/hI2m5601N4h2
4FFABK2WBz0iVx5ASHYEy6iV8w4WKz3JK32KgHUpV+5PN5SlKUv8yLqM+3/7eMVB
YYoC2BppTG5NXwm12m8R3iplHKLfvLI/oYzlsoQNX4dvIe6TTaTsL3jRcqu0CF84
Y54/LI0CgYEAiPZ3QAyTnza9tg15I0sX5nzRtR/ko7+7356Hjya4jz029cOdg04Z
DDR6a5m3PBYXp3aYuImB3dwIlAsf1JJiGEXz8wPOX5d1CFkVXaDLWEyIPTBzQ9Ns
RmZiiv2DcwKmj/puKu4jZ1Jkj92KSVNHxb8fK9tyVX06B7XxlTpwI0E=')
            ->setUsername('root');

        echo $ssh_trace->exec('sshd', 'STATUS', '/run/sshd.pid');
    }
}