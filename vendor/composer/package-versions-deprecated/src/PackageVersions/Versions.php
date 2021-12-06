<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.0@a9c1b59eba5a08ca2770a76eddb88922f504e8e0',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.1@c800380457948e65bbd30ba92cc17cda108bf8c9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.2@d6b3c37804539a24ba8a7d647a6144cab2f13242',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.2@1c2780df6b58998f411e64973cfa464ba0a06e00',
  'doctrine/orm' => '2.8.4@a588555ecd837b8d7e89355d9a13902e54d529c7',
  'doctrine/persistence' => '2.2.0@08d3e6e666de85c7748fa27bfd63bb15ac29eab2',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '4.3.0@1beb4447f9efd26041eba7eff50614e798c353fd',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ramsey/collection' => '1.2.1@eaca1dc1054ddd10cbd83c1461907bee6fb528fa',
  'ramsey/uuid' => '4.2.1@fe665a03df4f056aa65af552a96e1976df8c8dae',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.2.7@e6676acfabf011dca2beaa5f9b8d519c8aea2870',
  'symfony/cache' => 'v5.2.8@c13bfc6682a669e6ba592ba3305139ebf946a811',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.2.8@8dfa5f8adea9cd5155920069224beb04f11d6b7e',
  'symfony/console' => 'v5.2.8@864568fdc0208b3eba3638b6000b69d2386e6768',
  'symfony/dependency-injection' => 'v5.2.8@024e929da5a994cbab0ce2291d332f7edf926acf',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.2.7@6c8318bb9b315d3d325e9904445e4c4514e3d8ed',
  'symfony/dotenv' => 'v5.2.4@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.8@1416bc16317a8188aabde251afef7618bf4687ac',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => 'v5.2.7@c8bb14c3bcc397845d7e86a1cc5022671eed1ff8',
  'symfony/filesystem' => 'v5.2.12@ed397ef25365b3db9f215af4ed5b1ec8a5b10989',
  'symfony/finder' => 'v5.2.8@eccb8be70d7a6a2230d05f6ecede40f3fdd9e252',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v5.2.12@929811a7667aa5814f93a70974423870b14c05aa',
  'symfony/framework-bundle' => 'v5.2.7@af652965c2a598e192200c6932ab9edd283ffe42',
  'symfony/http-client' => 'v5.2.12@1895ede860a198803395a67738104211508b5ddc',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.8@e8fbbab7c4a71592985019477532629cb2e142dc',
  'symfony/http-kernel' => 'v5.2.8@c3cb71ee7e2d3eae5fe1001f81780d6a49b37937',
  'symfony/intl' => 'v5.2.7@6d40be5e4331041aa14add5633986d95667ae624',
  'symfony/mailer' => 'v5.2.7@c50b304246e56c8574c203bce440f0eafb107ae9',
  'symfony/mime' => 'v5.2.7@7af452bf51c46f18da00feb32e1ad36db9426515',
  'symfony/monolog-bridge' => 'v5.2.7@ddb9c33dfa1bd89c956892c3d1ba35f324e3ccd8',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/notifier' => 'v5.2.8@bafefffe9e1ac78d2aaa40fdaf578ef33f41fe72',
  'symfony/options-resolver' => 'v5.2.4@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.2.7@98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
  'symfony/property-access' => 'v5.2.4@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.8@cc8121baf91039648d5f8feb894dc4a9d4935cc0',
  'symfony/proxy-manager-bridge' => 'v5.2.4@fd6bb40190b1719abbe831be09adf38e0744d5f5',
  'symfony/routing' => 'v5.2.7@3f0cab2e95b5e92226f34c2c1aa969d3fc41f48c',
  'symfony/security-bundle' => 'v5.2.12@bc36546f36355d7c0b56b23c44786b36904f838d',
  'symfony/security-core' => 'v5.2.8@216b19421aa3b414f18f353aeea0bb230827844c',
  'symfony/security-csrf' => 'v5.2.7@0ed3353e3c053711a1d86a74395f25736fc333de',
  'symfony/security-guard' => 'v5.2.8@8137325674edfdecf7367e40804d8ee9525b87e0',
  'symfony/security-http' => 'v5.2.8@c55a8f70fb2a04cf8ec3263d337abb3f22fc0132',
  'symfony/serializer' => 'v5.2.7@3698d2611c4917d3689ff89c0a0dcaa761c8e771',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.7@d99310c33e833def36419c284f60e8027d359678',
  'symfony/string' => 'v5.2.8@01b35eb64cac8467c3f94cd0ce2d0d376bb7d1db',
  'symfony/translation' => 'v5.2.8@445caa74a5986f1cc9dd91a2975ef68fa7cb2068',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.2.8@dcdc60ace03264f50258978113c4f2a33bdc439f',
  'symfony/twig-bundle' => 'v5.2.4@5ebbb5f0e8bfaa0b4b37cb25ff97f83b18caf221',
  'symfony/validator' => 'v5.2.14@a46ac85624ad3418d455bb8f4ce452014c28518c',
  'symfony/var-dumper' => 'v5.2.8@d693200a73fae179d27f8f1b16b4faf3e8569eba',
  'symfony/var-exporter' => 'v5.2.8@d26db2d2b2d7eb2c1adb8545179f8803998b8237',
  'symfony/web-link' => 'v5.2.5@118ef73c177a033955af1342ec54f08dd1bf6d8e',
  'symfony/yaml' => 'v5.2.7@76546cbeddd0a9540b4e4e57eddeec3e9bb444a5',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'symfony/browser-kit' => 'v5.2.7@b1c9d5701273a255da3a580f85066b83bd94e97d',
  'symfony/css-selector' => 'v5.2.7@59a684f5ac454f066ecbe6daecce6719aed283fb',
  'symfony/debug-bundle' => 'v5.2.4@ec21bd26d24dab02ac40e4bec362b3f4032486e8',
  'symfony/dom-crawler' => 'v5.2.4@400e265163f65aceee7e904ef532e15228de674b',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/phpunit-bridge' => 'v5.2.8@b3cf2c3f7f6196fb498002920c1ae9036d9e5619',
  'symfony/web-profiler-bundle' => 'v5.2.8@68aea5b0ca1328c2a1ae3df04cce50302a5106f9',
  'symfony/polyfill-ctype' => '*@ffb8f3f60c7acb018ded89e0715888200cd0f72f',
  'symfony/polyfill-iconv' => '*@ffb8f3f60c7acb018ded89e0715888200cd0f72f',
  'symfony/polyfill-php72' => '*@ffb8f3f60c7acb018ded89e0715888200cd0f72f',
  '__root__' => 'dev-master@ffb8f3f60c7acb018ded89e0715888200cd0f72f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
